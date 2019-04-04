<?php

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



Auth::routes(['verify' => true]);



Route::get('/', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/home', function () {
    return view('home');
});

Route::get('/acceuil', function () {
    return view('footerComponent');
    });
    Route::get('/content', function () {
        return view('contentComponent');
    });

   

    Route::group([],function (){
        
        Route::resource('article','ArticleController')->middleware('verified');
        
    });
    

       
        Route::get('/annonce/{id}', 'ArticleController@show');

		Route::get('/category/{id}','ArticleController@showss');  
    
        Route::get('/region/{id}', 'ArticleController@shows');

