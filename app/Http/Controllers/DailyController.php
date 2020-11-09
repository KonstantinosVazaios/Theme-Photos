<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daily;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use \Illuminate\Support\Facades\Storage;

class DailyController extends Controller
{

    public function show(Daily $daily)
    {
      return view('admin.content.daily.show', compact('daily'));
    }

    public function update(Request $request, Daily $daily)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'titleBig' => 'required',
        'titleSmall' => 'required',
        'description' => 'required',
        'btntext' => 'required|max:15',
        'btnlink' => 'required',
        'image' => 'nullable|image|',
      ]);

      //Checking if request has image to update
      if ($request->has('image'))
      {
        //Deleting Current Image from Storage
        $daily->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('daily');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(470, 472);
        $image->save();

        //Updating the Image_Path of the Model
        $daily->update([
          'image_path' => $imagePath,
        ]);
      }

      //Update with new credentials
      $daily->update([
        'titleBig' => $request->input('titleBig'),
        'titleSmall' => $request->input('titleSmall'),
        'description' => $request->input('description'),
        'btntext' => $request->input('btntext'),
        'btnlink' => $request->input('btnlink'),
      ]);

      return redirect('/admin/homu/content/daily/'. $daily->id);
    }

}
