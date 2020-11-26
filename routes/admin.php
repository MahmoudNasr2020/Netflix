
<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), // to set ar or en before url
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'] //to add middleware for url
    ],
    function () {
        Route::group(['prefix' => 'admin','as'=>'admin.','namespace'=>'admin'], function () {

            Route::get('/','home\homeController@index'); //to show home page
            Route::get('home','home\homeController@index'); //to show home page
            Route::resource('category','category\categoryController'); //to show,insert,update,and delete category
            
        });
    }
);

