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

Auth::routes();
Route::get('home', function () {
    return redirect('/');
});

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/service', 'HomeController@service');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'PostController@index');
Route::get('search', 'PostController@search');
Route::get('posts/{id}', 'PostController@show')->name('post_show');
Route::post('/sendemail', 'SendEmailController@sendemail')->name('sendemail');

Route::get('connexion', 'Auth\AuthController@connexion')->name('connexion');
Route::get('account-new', 'Auth\AuthController@register')->name('new-account');

Route::post('new-letter', 'Auth\AuthController@newLetter')->name('new-letter');
Route::get('unsubscribe', 'Auth\AuthController@unsubscribe')->name('unsubscribe');
Route::post('unsubscribe', 'Auth\AuthController@unsubscription')->name('unsubscription');

Route::post('posts/{post}/comment', 'PostController@comment')->name('post_comment');
Route::get('categories/{category}', 'CategoryController@index')->name('category_post');

// Authenticated User Routes
Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
Route::get('profile', 'UserController@profile')->name('profile');
Route::get('posts', 'UserController@posts')->name('posts');

Route::get('user/categories', 'UserController@categories')->name('categories');
Route::get('user/comments', 'UserController@comments')->name('comments');


Route::get('user/posts/create', 'PostController@create')->name('post_create');
Route::post('user/posts/create', 'PostController@store')->name('post_store');

Route::get('user/posts/{post}/edit', 'PostController@edit')->name('post_edit');
Route::patch('user/posts/{post}', 'PostController@update')->name('post_update');

Route::delete('user/posts/{post}', 'PostController@destroy')->name('post_destroy');
Route::get('user/categories/create', 'CategoryController@create')->name('categorie_create');
Route::post('user/categories/create', 'CategoryController@store')->name('categorie_store');

Route::get('user/categories/{category}/edit', 'CategoryController@edit')->name('categorie_edit');
Route::patch('user/categories/{category}', 'CategoryController@update')->name('categorie_update');

Route::delete('user/categories/{category}', 'CategoryController@destroy')->name('categorie_destroy');

Route::delete('user/comments/{comment}', 'CommentController@destroy')->name('comment_destroy');

