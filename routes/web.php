<?php

use App\Events\MessagePosted;
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

Route::get('/', function () {
    return view('welcome');
});

//Chat app demo with vuejs
Route::get('chat', function () {
    return view('chat');
})->middleware('auth');

Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function () {
    //Store the new message
    $user = Auth::user();

    $message = $user->messages()->create([
      'message' => request()->get('message')
    ]);

    //This was for a simple respose
    //return ['status' => 'OK'];
    // Announce that a new message has been posted
    event(new MessagePosted($message, $user));
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
