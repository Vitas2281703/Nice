<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');
Route::group(['prefix' => 'user-groups'], function () {
    Route::module('users');
    Route::module('workers');
    Route::module('ourClients');
});
Route::group(['prefix' => 'products'], function () {
    Route::module('categories');
    Route::module('fabricators');
    Route::module('devices');
    Route::module('services');
});

Route::module('requests');
Route::module('promotions');
Route::module('news');
Route::module('orders');
