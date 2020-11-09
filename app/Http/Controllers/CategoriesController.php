<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use \Illuminate\Support\Str;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoriesController extends Controller
{

    public function index()
    {
      //Get all Categories
      $categories = Category::orderBy('position')->with('products')->get();
      return view('admin.menu.categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
      //Get Categories for 'quick select' Category
      $cats = Category::orderBy('position')->get();

      //Get the Category and order its products by 'position'
      $category->load(['products' => function($query){
        $query->orderBy('position');
      }]);

      return view('admin.menu.categories.show', compact('category', 'cats'));
    }

    public function create()
    {
      return view('admin.menu.categories.create');
    }

    public function store(Request $request)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'name' => 'required|'
      ]);

      //Making the slug of the Categorys' Title
      $slug = Str::slug($request->input('name'), '-');

      //Setting the Categorys' number of position to MAX
      $position = Category::max('position') + 1;

      //Creating Category
      Category::create([
        'title' =>$validated['name'],
        'slug' => $slug,
        'position' => $position
      ]);
      return redirect('/admin/homu/menu');
    }

    public function update(Category $category, Request $request)
    {
      //Validating Inputs from Request
      $validated = $request->validate([
        'name' => 'required|',
        'position' => 'required|numeric'
      ]);

      //Making the slug of the Categorys' Title
      $slug = Str::slug($request->input('name'), '-');

      //Find the existing category with position number = Request->position
      $existingCategory = Category::where('position', '=', $validated['position'])->first();

      //update the existing Categorys' position with the requested position
      if ($existingCategory) {
        $existingCategory->update([
          'position' => $category->position,
        ]);
      }
      else {
        //If couldn't find Category with requested position , ABORT
        abort(404);
      }

      //Update Categorys' Credentials
      $category->update([
        'title' => $validated['name'],
        'slug' => $slug,
        'position' => $validated['position'],
      ]);

      return redirect('/admin/homu/category/'. $category->slug);
    }


    public function delete(Category $category)
    {
      //Decrement position to all Categories > $category->position
      $higherCats = Category::where('position', '>', $category->position)->get()->map(function($higherCat){
        $higherCat->position--;
        $higherCat->save();
      });

      //Delete Category
      $category->delete();
      return redirect('/admin/homu/menu');
    }
}
