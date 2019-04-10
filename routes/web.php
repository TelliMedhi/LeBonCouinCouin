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

		Route::get('/category/{id}','ArticleController@category');  
    
        Route::get('/region/{id}', 'ArticleController@shows');
        
        Route::get('/recherche', 'ArticleController@index');
        
        Route::get('/', 'ArticleController@acceuil')->middleware('verified');
        
        Route::get('/home', 'ArticleController@acceuil');
        
        Route::post('/category', 'ArticleController@category');

