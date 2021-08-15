<?php

use Illuminate\Support\Facades\Route;
use App\User;
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

  Route::get('admin/homu/mail', 'MessagesController@index');
  Route::get('admin/homu/menu', 'CategoriesController@index');
  Route::get('admin/homu/content', 'ContentController@index');
  Route::get('admin/homu/about', 'ContentController@about');

  //Mails
  Route::get('admin/homu/mail/{mail}', 'MessagesController@show');
  Route::delete('admin/homu/mail/{mail}', 'MessagesController@delete')->middleware('can:make-actions');

  //Background
  Route::get('admin/homu/background/{background}', 'BackgroundController@index');
  Route::patch('admin/homu/background/{background}', 'BackgroundController@update')->middleware('can:make-actions');

  //Products
  Route::get('admin/homu/product/create', 'ProductsController@create');
  Route::post('/admin/homu/product/create', 'ProductsController@store')->middleware('can:make-actions');
  Route::get('/admin/homu/product/{product:slug}', 'ProductsController@show');
  Route::patch('/admin/homu/product/{product:slug}', 'ProductsController@update')->middleware('can:make-actions');
  Route::delete('/admin/homu/product/{product:slug}', 'ProductsController@delete')->middleware('can:make-actions');

  //Categories
  Route::get('admin/homu/category/create', 'CategoriesController@create');
  Route::post('/admin/homu/category/create', 'CategoriesController@store')->middleware('can:make-actions');
  Route::get('/admin/homu/category/{category:slug}', 'CategoriesController@show');
  Route::patch('/admin/homu/category/{category:slug}', 'CategoriesController@update')->middleware('can:make-actions');
  Route::delete('/admin/homu/category/{category:slug}', 'CategoriesController@delete')->middleware('can:make-actions');

  //Slider Content
  Route::get('admin/homu/content/slider', 'SliderController@index');
  Route::get('admin/homu/content/slider/{slider}', 'SliderController@show');
  Route::patch('admin/homu/content/slider/{slider}', 'SliderController@update')->middleware('can:make-actions');

  //Daily Content
  Route::get('admin/homu/content/daily/{daily}', 'DailyController@show');
  Route::patch('admin/homu/content/daily/{daily}', 'DailyController@update')->middleware('can:make-actions');

  //Special Dishes Content
  Route::get('admin/homu/content/special', 'SpecialController@index');
  Route::get('admin/homu/content/special/create', 'SpecialController@create');
  Route::post('admin/homu/content/special/create', 'SpecialController@store')->middleware('can:make-actions');
  Route::get('admin/homu/content/special/{special}', 'SpecialController@show');
  Route::patch('admin/homu/content/special/{special}', 'SpecialController@update')->middleware('can:make-actions');
  Route::delete('admin/homu/content/special/{special}', 'SpecialController@delete')->middleware('can:make-actions');

  //Photokitchen
  Route::patch('admin/homu/content/photokitchen/{kitchen}', 'PhotokitchenController@update')->middleware('can:make-actions');
  Route::get('admin/homu/content/photokitchen/{kitchen}', 'PhotokitchenController@index');

  //Gallery Content
  Route::get('admin/homu/content/gallery', 'GalleryController@index');
  Route::get('admin/homu/content/gallery/create', 'GalleryController@create');
  Route::post('admin/homu/content/gallery/create', 'GalleryController@store')->middleware('can:make-actions');
  Route::delete('admin/homu/content/gallery/{gallery}', 'GalleryController@delete')->middleware('can:make-actions');

  //Review
  Route::get('admin/homu/content/review/{review}', 'ReviewController@index');
  Route::patch('admin/homu/content/review/{review}', 'ReviewController@update')->middleware('can:make-actions');

  //About Section
  Route::get('admin/homu/about/story', 'AboutController@index');
  Route::patch('admin/homu/about/{story}', 'AboutController@update')->middleware('can:make-actions');

  //Stats Section - About
  Route::get('admin/homu/about/stats', 'StatsController@index');
  Route::get('admin/homu/about/stats/{stat}', 'StatsController@show');
  Route::patch('admin/homu/about/stats/{stat}', 'StatsController@update')->middleware('can:make-actions');
});
