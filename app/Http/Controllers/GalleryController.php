<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
      //Get all Galleries
      $galleries = Gallery::all();
      return view('admin.content.gallery.index', compact('galleries'));
    }

    public function create()
    {
      return view('admin.content.gallery.create');
    }

    public function store(Request $request)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'image' => 'required|image'
      ]);

      //Storing New Image
      $imagePath = $request->file('image')->store('gallery');

      //Resizing Image with Image Intervention
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(353, 199);
      $image->save();

      //Create new Gallery
      Gallery::create([
        'image_path' => $imagePath,
      ]);

      return redirect('/admin/homu/content/gallery');
    }

    public function delete(Gallery $gallery)
    {
      //Deleting Gallery's Image
      $gallery->deleteImg();

      //Delete Gallery
      $gallery->delete();

      return redirect('/admin/homu/content/gallery');
    }
}
