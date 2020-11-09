<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Background;
use Intervention\Image\Facades\Image;

class BackgroundController extends Controller
{
    public function index(Background $background)
    {
      return view('admin.background.index', compact('background'));
    }

    public function update(Request $request,Background $background)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'image' => 'required|image'
      ]);

      //Checking if request has image to update
      if ($request->has('image'))
      {
          //Deleting Current Image from Storage
          $background->deleteImg();

          //Storing New Image
          $imagePath = $request->file('image')->store('background');

          //Resizing Image with Image Intervention
          $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 731);
          $image->save();

          //Updating the Image_Path of the Model
          $background->update([
            'image_path' => $imagePath,
          ]);
      }

      return redirect('/admin/homu/background/1');
    }
}
