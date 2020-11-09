<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photokitchen;
use Intervention\Image\Facades\Image;


class PhotokitchenController extends Controller
{
  public function index(Photokitchen $photo)
  {
    return view('admin.content.photokitchen.index', compact('photo'));
  }

  public function update(Request $request,Photokitchen $photo)
  {
    //Validating Inputs from Request
    $validated = $request->validate([
      'image' => 'required|image'
    ]);

    if ($request->has('image'))
    {
        //Deleting Current Image from Storage
        $photo->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('photokitchen');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->resize(550, 425);
        $image->save();

        //Updating the Image Path 
        $photo->update([
          'image_path' => $imagePath,
        ]);
    }
    return redirect('/admin/homu/content/photokitchen/1');
  }
}
