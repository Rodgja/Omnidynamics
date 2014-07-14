<?php

# Home

Route::get('/',['as'=>'home', 'uses'=>'PagesController@index']);

# Profile
Route::get('profile/{profile}', 'ProfilesController@show');
Route::get('profile/edit', ['as' => 'profiles.edit', 'uses' => 'ProfilesController@edit']);

# Registration

Route::get('/register', 'RegistrationController@create');
Route::post('/register', ['as' =>'registration.store', 'uses' => 'RegistrationController@store']);

# Authentication

Route::get('login', ['as' => 'login', 'uses' =>'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' =>'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' =>['create','store','destroy']]);

# Shop

Route::get('/shop','ShopController@show');
Route::get('/shop/{product}', 'ShopController@product');

# cart
/*
Route::get('/cart','CartController@index');
Route::get('/cart/insert','CartController@insert');
*/