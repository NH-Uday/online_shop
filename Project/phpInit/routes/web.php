<?php


Route::get('/','HomeController@index')->name('home.index');


Route::get('/login','LoginController@login');
Route::post('/login','LoginController@check');
Route::post('/reg','LoginController@registerCheck')->name('login.registerCheck');

Route::post('/unameChk','LoginController@unameCheck')->name('login.unameCheck');
Route::post('/emailChk','LoginController@emailChk')->name('login.emailChk');
Route::post('/contactCheck','LoginController@contactCheck')->name('login.contactCheck');



Route::get('/logout','LogoutController@index')->name('logout.index');
Route::get('/about',function(){
	return view("about");
});

Route::get('product-details','productController@show');
Route::get('product-details/{id}','productController@auth');