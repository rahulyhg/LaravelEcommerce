<?php

Route::group(['module' => 'Home', 'middleware' => ['web'], 'namespace' => 'App\Modules\Home\Controllers'], function() {

    Route::resource('home', 'HomeController');

});
