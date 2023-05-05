<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

});

Route::middleware("localization")->group(function (){
    Route::controller(HomeController::class)->group(function (){
        Route::get('/', 'index');
        Route::get('/news', 'news');
        Route::get('/news/{id}', 'oneNews');
        Route::get('language/{locale}', 'locale');
        Route::post('/contact', 'contact');
        Route::get('/about', 'about');
        Route::get('/structure', 'structure');
        Route::get('/leadership', 'leadership');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
