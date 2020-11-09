<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Special;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SpecialController extends Controller
{
    public function index()
    {
      //Get all Specials
      $specials = Special::all();
      return view('admin.content.special.index', compact('specials'));
    }

    public function show(Special $special )
    {
      return view('admin.content.special.show', compact('special'));
    }

    public function create()
    {
      return view('admin.content.special.create');
    }

    public function store(Request $request)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'required|image',
      ]);

      //Storing New Image
      $imagePath = $request->file('image')->store('specials');

      //Resizing Image with Image Intervention
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(200, 115);
      $image->save();

      //Create New Special
      Special::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'image_path' => $imagePath
      ]);

      return redirect('/admin/homu/content/special');
    }

    public function update(Request $request, Special $special)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image'
      ]);

      if ($request->has('image'))
      {
        //Deleting Current Image from Storage
        $special->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('specials');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(200, 115);
        $image->save();

        //Update the Image Patch
        $special->update([
          'image_path' => $imagePath,
        ]);
      }

      //Update Special's Credentials
      $special->update($validated);

      return redirect('/admin/homu/content/special');

    }

    public function delete(Special $special)
    {
      $special->deleteImg();
      $special->delete();

      return redirect('/admin/homu/content/special');
    }
}
