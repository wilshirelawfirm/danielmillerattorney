<?php

Route::get('/', [
	'as' => 'home', 
	'uses' => 'PageController@home'
]);

Route::get('/about', [
	'as' => 'about', 
	'uses' => 'PageController@about'
]);

Route::get('/cases', [
	'as' => 'cases', 
	'uses' => 'PageController@cases'
]);

Route::get('/contact', [
	'as' => 'contact', 
	'uses' => 'ContactController@index'
]);

Route::post('/contact', [
	'as' => 'contact-store', 
	'uses' => 'ContactController@store'
]);

Route::get('/contact/thank-you', [
	'as' => 'contact-thanks', 
	'uses' => 'ContactController@thanks'
]);