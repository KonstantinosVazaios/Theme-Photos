<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index()
    {
      //Get all Sliders
      $sliders = Slider::all();
      return view('admin.content.slider.index', compact('sliders'));
    }

    public function show(Slider $slider)
    {
      return view('admin.content.slider.show', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'title' => 'required|',
        'content' => 'required|',
        'btntext' => 'required',
        'btnlink' => 'required',
        'image' => 'nullable|image'
      ]);

      //Checking if request has image to update
      if ($request->has('image'))
      {
          //Deleting Current Image from Storage
          $slider->deleteImg();

          //Storing New Image
          $imagePath = $request->file('image')->store('slider');

          //Resizing Image with Image Intervention
          $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 999);
          $image->save();

          //Updating the Image_Path
          $slider->update(['image_path' => $imagePath]);
      }

      //Update Slider's Credentials
      $slider->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'btntext' => $request->input('btntext'),
        'btnlink' => $request->input('btnlink'),
      ]);

      return redirect('/admin/homu/content/slider');

    }
}
