<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);



//User
Route::get('/', 'HomuController@index');
Route::get('/about', 'HomuController@about');
Route::get('/menu/{category:slug}', 'HomuController@menuCategory');
Route::get('/contact', 'HomuController@contact');
Route::post('/contact', 'ContactController@mail');


// ADMIN
Route::middleware('auth')->group(function () {

  Route::get('admin/homu', 'AdminController@index');
  Route::get('admin/homu/mail', 'MessagesController@index');
  Route::get('admin/homu/menu', 'CategoriesController@index');

  //Mails
  Route::get('admin/homu/mail/{mail}', 'MessagesController@show');
  Route::delete('admin/homu/mail/{mail}', 'MessagesController@delete');

  //Background
  Route::get('admin/homu/background/{background}', 'BackgroundController@index');
  Route::patch('admin/homu/background/{background}', 'BackgroundController@update');

  //Products
  Route::get('admin/homu/product/create', 'ProductsController@create');
  Route::post('/admin/homu/product/create', 'ProductsController@store');
  Route::get('/admin/homu/product/{product:slug}', 'ProductsController@show');
  Route::patch('/admin/homu/product/{product:slug}', 'ProductsController@update');
  Route::delete('/admin/homu/product/{product:slug}', 'ProductsController@delete');

  //Categories
  Route::get('admin/homu/category/create', 'CategoriesController@create');
  Route::post('/admin/homu/category/create', 'CategoriesController@store');
  Route::get('/admin/homu/category/{category:slug}', 'CategoriesController@show');
  Route::patch('/admin/homu/category/{category:slug}', 'CategoriesController@update');
  Route::delete('/admin/homu/category/{category:slug}', 'CategoriesController@delete');

  //Slider Content
  Route::get('admin/homu/content/slider', 'SliderController@index');
  Route::get('admin/homu/content/slider/{slider}', 'SliderController@show');
  Route::patch('admin/homu/content/slider/{slider}', 'SliderController@update');

  //Daily Content
  Route::get('admin/homu/content/daily/{daily}', 'DailyController@show');
  Route::patch('admin/homu/content/daily/{daily}', 'DailyController@update');

  //Special Dishes Content
  Route::get('admin/homu/content/special', 'SpecialController@index');
  Route::get('admin/homu/content/special/create', 'SpecialController@create');
  Route::post('admin/homu/content/special/create', 'SpecialController@store');
  Route::get('admin/homu/content/special/{special}', 'SpecialController@show');
  Route::patch('admin/homu/content/special/{special}', 'SpecialController@update');
  Route::delete('admin/homu/content/special/{special}', 'SpecialController@delete');

  //Photokitchen
  Route::patch('admin/homu/content/photokitchen/{photo}', 'PhotokitchenController@update');
  Route::get('admin/homu/content/photokitchen/{photo}', 'PhotokitchenController@index');

  //Gallery Content
  Route::get('admin/homu/content/gallery', 'GalleryController@index');
  Route::get('admin/homu/content/gallery/create', 'GalleryController@create');
  Route::post('admin/homu/content/gallery/create', 'GalleryController@store');
  Route::delete('admin/homu/content/gallery/{gallery}', 'GalleryController@delete');

  //Review
  Route::get('admin/homu/content/review/{review}', 'ReviewController@index');
  Route::patch('admin/homu/content/review/{review}', 'ReviewController@update');

});
