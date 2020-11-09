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
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
      return view('homu.index', compact('sliders','daily', 'specials', 'photoKitchen', 'galleries'));
    }

    public function about()
    {
      //Get all Galleries for Image-Gallery
      $galleries = Gallery::all();
      return view('homu.about', compact('galleries'));
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
      return view('homu.contact');
    }


    public function contactMail(Request $request)
    {
      //Validating Inputs from Request
      $validated = Validator::make($request->all(), [
        'name' => 'required|min:3|max:50',
        'telephone' => 'required|numeric|digits_between:10,10',
        'email' => 'required|email',
        'message' => 'required|min:20|max:400',
      ]);

      //If Request Inputs have Errors return back to Form
      if ($validated->fails()) {
        return redirect(url()->previous().'#contact')
                ->withErrors($validated);
      }

      //Prepare variables for the Event
      $name = $request->input('name');
      $telephone = $request->input('telephone');
      $email = $request->input('email');
      $message = $request->input('message');

      //Dispatch New Mail Event
      event(new MailNotification($name, $telephone, $email, $message));

      //Retun Back 
      return redirect(url()->previous().'#contact')->with(['status' => 'Το μήνυμα έχει σταλθεί!']);
    }

}
