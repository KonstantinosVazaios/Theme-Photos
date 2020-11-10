<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
  public function index(Review $review)
  {
    return view('admin.content.review.index', compact('review'));
  }

  public function update(Request $request,Review $review)
  {
    //Validating Inputs from Request
    $validated = $request->validate([
      'image' => 'required|image'
    ]);

    //Checking if request has image to update
    if ($request->has('image'))
    {
        //Deleting Current Image from Storage
        $review->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('review');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 804);
        $image->save();

        //Updating the Image_Path of the Model
        $review->update([
          'image_path' => $imagePath,
        ]);
    }

    return redirect('/admin/homu/content/review/1');
  }
}
