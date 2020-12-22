<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Events\Dispatchable;
use App\Events\MailNotification;
use App\Slider;
use App\Daily;
use App\Special;
use App\Gallery;
use App\Category;
use App\Product;
use App\Message;
use App\Photokitchen;
use App\Review;
use App\About;
use App\Stat;
use App\Mail\ContactMail;

class HomuController extends Controller
{

    public function index()
    {
      //Get all Content for Home Page
      $sliders = Slider::all();
      $daily = Daily::first();
      $specials = Special::all();
      $galleries = Gallery::all();
      $photoKitchen = Photokitchen::first();
      $review = Review::first();
      return view('homu.index', compact('sliders','daily', 'specials', 'photoKitchen', 'galleries', 'review'));
    }

    public function about()
    {
      //Get all Galleries for Image-Gallery
      $about = About::first();
      $stats = Stat::all();
      $galleries = Gallery::all();
      return view('homu.about', compact('about', 'stats', 'galleries'));
    }

    public function menuCategory(Category $category)
    {
      //Load products and order by POSITION
      $category->load(['products' => function ($query) {
          $query->orderBy('position');
      }]);
      return view('homu.menuCategory', compact('category'));
    }


    public function contact()
    {
      //Get all Galleries for Image-Gallery
      $galleries = Gallery::all();
      return view('homu.contact', compact('galleries'));
    }

}
