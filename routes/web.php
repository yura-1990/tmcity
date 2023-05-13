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

Route::middleware("localization")->group(function (){
    Route::controller(HomeController::class)->group(function (){
        Route::get('/', 'index');
        Route::get('/news', 'news')->name('news');
        Route::get('/news/{id}', 'oneNews')->name('show.news');
        Route::get('language/{locale}', 'local');
        Route::post('/contact', 'contact');
        Route::get('/about', 'about');
        Route::get('/learning-center', 'learningCenter')->name('learning-center');
        Route::get('/laboratory', 'laboratory')->name('laboratory');
        Route::get('/services', 'services')->name('services');
        Route::get('/open-data', 'openData')->name('open-data');
        Route::get('/regulatory-documents', 'regulatoryDocuments')->name('regulatory-documents');
        Route::get('/structure', 'structure')->name('structure');
        Route::get('/leadership', 'leadership')->name('leadership');
        Route::get('/dictionary', 'dictionary')->name('dictionary');
        Route::get('/calculator', 'calculator')->name('calculator');
        Route::get('/classifier', 'classifier')->name('classifier');
        Route::get('/standards', 'standards')->name('standards');
        Route::get('/institute', 'institute')->name('institute');
    });
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
