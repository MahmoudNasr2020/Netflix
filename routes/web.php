<?php

use App\Model\Admin\Category;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    return view('welcome');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), // to set ar or en before url
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'] //to add middleware for url
    ],
    function () {
     Route::get('users', function () {
        //$selectedTag = Video::find($id)->tags()->get()->pluck('id')->toArray();
         $cat = Category::get()->toArray();
        dd($cat);
        if(in_array(2,$cat)){
            return 'yes';
        }
       // return $cat->name;
     });

    }
);
