<?php


Route::get('/', 'PageController@index')->name('index');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/signup', 'PageController@signup')->name('signup');

Route::get('/signin', 'PageController@signin')->name('signin');

Route::get('/messages', 'PageController@messages')->name('messages');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::post('/contact', 'PageController@store')->name('contact.store');

Route::get('/logout', 'PageController@logout')->name('logout');

Route::get('/contactmessage1', 'PageController@contactmessage1')->name('contactmessage1');
Route::get('/contactmessage2', 'PageController@contactmessage2')->name('contactmessage2');
Route::get('/contactmessage3', 'PageController@contactmessage3')->name('contactmessage3');
Route::get('/contactmessage4', 'PageController@contactmessage4')->name('contactmessage4');
Route::get('/contactmessage5', 'PageController@contactmessage5')->name('contactmessage5');