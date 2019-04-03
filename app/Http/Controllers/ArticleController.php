<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Auth;




class ArticleController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $articles = Article::all();
        return $articles;
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = Auth::user();
        
        
        return view('addAnnonce')->with('user',$user);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = $request->image0->store('/storage/images');
        
        $image = $request->image0->store('public/images');
         
        Article::create([
            'category' => $request['category'],
             'titre' => $request['titre'],
             'text' => $request['text'],
             'prix' => $request['prix'],
             'image0'=> $images,
             'code_postal' => $request['code_postal'],
             'region' => $request['region'],
             'email' => $request['email'],
           
        ]);
        
        echo "annonce bien ajoutée";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
   
 
    
}
