<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use \Illuminate\Support\Str;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function show(Product $product)
    {
      //Get all Products for the position Input
      $products = $product->category->load(['products' => function($query){
        $query->orderBy('position');
      }])->products;

      return view('admin.menu.products.show', compact('product', 'categories', 'products'));
    }


    public function create()
    {
      //Get Categories for SELECT INPUT
      $categories = Category::orderBy('position')->get();

      return view('admin.menu.products.create', compact('categories'));
    }


    public function store(Request $request)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'category' => 'required|',
        'title' => 'required|',
        'price' => 'nullable|numeric',
        'image' => 'image'
      ]);

      //Find requested Category
      $category = Category::findOrFail($request->input('category'));

      //Creating Slug of the Products Title
      $slug = Str::slug($request->input('title'), '-');

      //Create Product
      Product::create([
        'title' => $request->input('title'),
        'category_id' => $request->input('category'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'slug' => $slug,
      ]);

      //Get the created product
      //Now that we know the Products' Category, we can specify the max position
      $createdProduct = Product::latest()->first();

      //Set the position for the product
      $position = $createdProduct->category->products->max('position') + 1;

      //Update Product Position
      $createdProduct->update([
        'position' => $position
      ]);

      //Checking if request has image to update
      if ($request->has('image'))
      {
          //Storing New Image
          $imagePath = $request->file('image')->store('menu');

          //Resizing Image with Image Intervention
          $image = Image::make(public_path("storage/{$imagePath}"))->fit(153, 115);
          $image->save();

          //Updating the Image_Path of the Model
          $createdProduct->update([
            'image_path' => $imagePath,
          ]);
      }

      return redirect('/admin/homu/category/'. $createdProduct->category->slug);
    }


    public function update(Request $request, Product $product)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'title' => 'required|',
        'price' => 'nullable|numeric',
        'position' => 'required|numeric',
        'image' => 'nullable|image',
      ]);

      //Checking if request has image to update
      if ($request->has('image'))
      {
        //Deleting Current Image from Storage
        $product->deleteImg();

        //Storing New Image
        $imagePath = $request->file('image')->store('menu');

        //Resizing Image with Image Intervention
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(153, 115);
        $image->save();

        //Updating the Image_Path
        $product->update([
          'image_path' => $imagePath,
        ]);
      }

      //Creating Slug of the Products Title
      $slug = Str::slug($request->input('title'), '-');

      //Swap position with an existing Product
      $existingProduct = $product->category->products->where('position', '=', $validated['position'])->first();
      if ($existingProduct) {
        $existingProduct->position = $product->position;
        $existingProduct->save();
      }
      else {
        abort(404);
      }

      //Updating Products credentials
      $product->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'slug' => $slug,
        'position' => $request->input('position'),
      ]);


      return redirect('/admin/homu/category/'. $product->category->slug);
    }


    public function delete(Product $product)
    {
      //Decrement position to all Products > $product->position
      $product->category->products->where('position', '>', $product->position)->map(function($prod){
        $prod->position--;
        $prod->save();
      });

      //Getting the Product's Category Slug to redirect after
      $category = $product->category->slug;

      //Delete Product's Image
      $product->deleteImg();

      //Delete Product
      $product->delete();
      return redirect('/admin/homu/category/' . $category);
    }

}
