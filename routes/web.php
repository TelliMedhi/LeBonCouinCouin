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

    Route::get('/formMessage/{id}', 'ArticleController@show_formMessage');
    
   

    Route::group([],function (){
        
        Route::resource('article','ArticleController')->middleware('verified');
        
    });
    
     /* Route::post('/test-contact', function(){
            
        return new App\Mail\Contact([
            'nom' =>'Durand',
            'email' =>'tellimedhi@outlook.fr',
            'message' =>'ton site est magnifique'
        ]);
        
      });*/
    
        /*Route::post('/test-contact', 'ContactController@store');*/
        
       
        Route::get('/annonce/{id}', 'ArticleController@show');

		Route::get('/category/{id}','ArticleController@category');  
    
        Route::get('/region/{id}', 'ArticleController@shows');
        
        Route::get('/recherche', 'ArticleController@index');
        
        Route::get('/', 'ArticleController@acceuil');
        
        Route::get('/home', 'ArticleController@acceuil');
        
        Route::post('/category', 'ArticleController@category');
        
        Route::get('/mesAnnonces', 'ArticleController@annonceUser');
        
        Route::post('/mesAnnonces/category', 'ArticleController@categoryMesAnnnonces');
        
        Route::post('/Annonce/supprimer/{id}', 'ArticleController@destroy');
        
        Route::post('/mail', 'ContactController@sendemail');
        
       
        
