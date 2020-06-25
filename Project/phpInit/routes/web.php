<?php


Route::get('/','HomeController@index')->name('home.index');


Route::get('/login','LoginController@login');
Route::post('/login','LoginController@check');
Route::get('/system/register','LoginController@register')->name('login.register');
Route::post('/system/register','LoginController@registerCheck')->name('login.registerCheck');



Route::get('/logout','LogoutController@index')->name('logout.index');
Route::get('/about',function(){
	return view("about");
});