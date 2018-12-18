<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', 'LinksController@welcome')->name('welcome');
Route::get('/cart', 'HireController@cart')->middleware('auth:customer')->name('cart');
Route::post('/cartdelete', 'HireController@cartdelete')->middleware('auth:customer')->name('deletecart');
Route::get('/hire', 'HireController@verifyhire')->name('verify');
Route::get('/products', 'LinksController@products')->name('products');
Route::get('/search', 'LinksController@search')->name('search');
Route::post('/savehiring','HireController@savehire')->name('savehire');
Route::get('/hiredmachine','LinksController@index')->name('hiredmachines');
Route::get('/chart','LinksController@chart')->name('chart')->middleware('auth:company');

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('company')->user();
    $authuser=Auth::guard('company')->user()->id;
    $cname = Auth::guard('company')->user()->companyname;
    $items=\App\Item::query()->where('company_id','=',$authuser)->get();
    $posts=\App\Post::query()->where('company_id','=',$authuser)->with('item')->get();
    $requests=\App\Requesting::query()->where('companyname','=',$cname)->with('customer')->get();
    $hires=App\Requesting::query()->where('companyname','=',$cname)->where('status','=','hired')->count();
    return view('company.home',compact('items','posts','requests','hires'));
})->name('home');


Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();
    $posts=\App\Post::all();
    $posts->load('item','company');
    $count=$posts->count();
    return view('customer.home', compact('posts','count'));
})->name('home');


Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'CompanyAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CompanyAuth\LoginController@login');
  Route::post('/logout', 'CompanyAuth\LoginController@logout')->name('logout');
  Route::post('/item', 'DataController@saveitem')->name('item');
  Route::post('/itemedit', 'DataController@edititem')->name('itemedit');
  Route::post('/itemdelete', 'DataController@deleteitem')->name('itemdelete');
  Route::post('/post', 'DataController@savepost')->name('post');
    Route::post('/editpost', 'DataController@editpost')->name('post');
  Route::post('/postdelete', 'DataController@deletepost')->name('postdelete');
    Route::post('/approve', 'DataController@approve')->name('approve');
    Route::post('/decline', 'DataController@decline')->name('decline');
  Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CompanyAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CompanyAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CompanyAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CompanyAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');
  Route::get('/products', 'LinksController@products')->name('products');
  Route::get('/profile', 'LinksController@profile')->name('products')->middleware('auth:customer');
  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});
