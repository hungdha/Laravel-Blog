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
Route::get("/", "HomeController@index")->name("index");
Route::get("/about", "HomeController@about")->name("about");
Route::get("/contact", "HomeController@contact")->name("contact");

Route::get("/login", "Auth\LoginController@showLoginForm")->name("loginForm");
Route::post("/login", "Auth\LoginController@login")->name("login");
Route::post("/logout", "Auth\LoginController@logout")->name("logout");

Route::get("/register", "Auth\RegisterController@showRegistrationForm")->name("loginForm");
Route::post("/register", "Auth\RegisterController@register")->name("register");

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\SocialController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\SocialController@getSocialHandle']);