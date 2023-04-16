<?php

use Illuminate\Support\Facades\Route;

Route::module('users');
Route::group(['prefix' => 'main-page'], function () {
    Route::module('promotions');
    Route::module('jobSteps');

});
Route::group(['prefix' => 'about-us'], function () {
    Route::module('workers');
    Route::module('ourClients');

});
Route::module('news');
Route::group(['prefix' => 'products'], function () {
    Route::module('categories');
    Route::module('fabricators');
    Route::module('devices');
    Route::module('services');
    Route::module('orderServices');
});
Route::group(['prefix' => 'orders'], function () {
    Route::module('orders');
    Route::module('requests');
});
Route::module('orderPoints');




