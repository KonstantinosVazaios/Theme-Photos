<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Category;
use App\Product;
use App\Slider;
use App\Special;
use App\Gallery;
use App\Daily;

class AdminController extends Controller
{
    public function __construct()
    {
      return $this->middleware('auth');
    }

    public function index()
    {
      $messages = Message::count();
      return view('admin.index', compact('messages'));
    }
}
