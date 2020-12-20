<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photokitchen;
use Intervention\Image\Facades\Image;


class PhotokitchenController extends Controller
{
  public function index(Photokitchen $kitchen)
  {
    return view('admin.content.photokitchen.index', compact('kitchen'));
  }

  public function update(Request $request,Photokitchen $kitchen)
  {
    //Validating Inputs from Request
    $validated = $request->validate([
      'title' =>  'required',
      'description' => 'required|max:450',
      'image' => 'nullable|image'
    ]);

    if ($request->has('image'))
    {
        //Deleting Current Image from Storage
        $kitchen->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('photokitchen');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->resize(550, 425);
        $image->save();

        //Updating the Image Path
        $kitchen->update([
          'image_path' => $imagePath,
        ]);
    }

    $kitchen->update([
      'title' => $validated['title'],
      'description' => $validated['description']
    ]);

    return redirect('/admin/homu/content/photokitchen/1');
  }
}
