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


// Home Controller
Route::get("/", "HomeController@index" )->name("index");
Route::get("/home", "HomeController@index" )->name("home");
Route::get("/about", "HomeController@about")->name("about");
Route::get("/contact", "HomeController@contact")->name("contact");

// Sign In / Sign Up show form
Route::get("/auth/login", "Auth\LoginController@showLoginForm")->name("loginForm");
// POST login form
Route::post("/auth/login", "Auth\LoginController@login")->name("login");
Route::get("/auth/logout", "Auth\LoginController@logout")->name("logout");

Route::get("/auth/register", "Auth\RegisterController@showRegistrationForm")->name("loginForm");
Route::post("/auth/register", "Auth\RegisterController@register")->name("register");

// Post Controller
Route::get("/posts/index", "PostController@index")->name("postIndex");
Route::post("/posts/create", "PostController@create")->name("postCreate");
Route::post("/posts/edit", "PostController@edit")->name("postEdit");
Route::post("/posts/show", "PostController@show")->name("postShow");
Route::post("/posts/update", "PostController@update")->name("postUpdate");



$s = 'social.'; 
Route::get('/social/redirect/{provider}',   
	[
		'as' => $s . 'redirect',   
		'uses' =>'Auth\SocialController@getSocialRedirect'
	]
); 
Route::get('/social/handle/{provider}',
	[
		'as' => $s . 'handle',
		'uses' => 'Auth\SocialController@getSocialHandle'
	]
);