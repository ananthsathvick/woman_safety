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
    return view('main');
});

Route::get('/hel',function(){
  $db = DB::table('sample')->where('samp','70')->value('samp');
  return $db;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/emergency_contact', 'HomeController@emergency_contact')->name('emergency_contact');
Route::get('/add_contact', 'HomeController@add_contact')->name('add_contact');
Route::get('/adc', 'HomeController@adc')->name('adc');
Route::get('/discuss', 'HomeController@discuss')->name('discuss');
Route::get('/post', 'HomeController@post')->name('post');
Route::post('/form', 'HomeController@form')->name('form');
Route::get('/ola', 'HomeController@ola')->name('ola');
Route::post('/send_mail', 'HomeController@send_mail')->name('send_mail');
