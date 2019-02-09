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

Route::middleware('auth')->group(function() {
   Route::get('chat', function() {
      return view('chat');
   });

   Route::get('messages', function() {
      return App\Message::with('user')->get();
   });

   Route::post('messages', function() {
      // store messages
      $user = Auth::user();
      $user->messages()->create([
         'message' => request()->get('message')
      ]);

      return ['status' => 'OK'];
   });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
