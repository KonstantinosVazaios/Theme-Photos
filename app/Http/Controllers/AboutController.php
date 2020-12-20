<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function index() {
      $about = About::first();
      return view('admin.content.about.index', compact('about'));
    }

    public function update(Request $request, About $story) {

      $validated = $request->validate([
        'title_first' => 'required',
        'description_first' => 'required|max:500',
        'image_path_first' => 'nullable|image',
        'title_second' => 'required',
        'description_second' => 'required|max:500',
        'image_path_second' => 'nullable|image',
      ]);

      //First Image
      if ($request->has('image_path_first')) {

        $about->deleteImg(first);

        $imagePathFirst = $request->file('image_path_first')->store('about');

        $imageFirst = Image::make(public_path("storage/{$imagePath}"))->resize(571, 530);
        $imageFirst->save();

        $about->update([
          'image_path_first' => $imagePathFirst,
        ]);

      }

      //Second Image
      if ($request->has('image_path_second')) {

        $about->deleteImg(second);

        $imagePathSecond = $request->file('image_path_second')->store('about');

        $imageSecond = Image::make(public_path("storage/{$imagePath}"))->resize(571, 530);
        $imageSecond->save();

        $about->update([
          'image_path_second' => $imagePathSecond,
        ]);

      }

      $about->update([
        'title_first' => $validated['title_first'],
        'description_first' => $validated['description_first'],
        'title_second' => $validated['title_second'],
        'description_second' => $validated['description_second']
      ]);

      return redirect('/admin/homu/about/story');

    }
}
