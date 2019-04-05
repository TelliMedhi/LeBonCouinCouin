<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




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
        /*SELECT email,name,articles.id  FROM `articles` inner join users on users.id=articles.user_id where user_id=2*/
        
        
        $user =  DB::table('users')
                        ->SELECT('email','name')
                        ->where('id', auth()->id())->first();
        
        
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
             'user_id'=> auth()->id(),
           
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
        $annonce =  DB::table('articles')
        ->join('users' , 'users.id', '=','articles.user_id')
        ->SELECT('text','name','email','prix','code_postal','titre','image0','articles.created_at')
        ->where('articles.id', $id)->first();
        
        
      /* $annonces = DB::table('articles')->where('id', $id)->first();*/
        
        return view('viewArticle')->with('annonce', $annonce);
    }
    

    
    //function pour afficher les annonces celon la region avec la carte 
    
    public function shows($id)
    {
        
        
        $annonces = DB::table('articles')->where('region', $id)->get();
        
        return view('contentComponent')->with('annonces', $annonces);
        
        
    }
    

    public function showss($id)
    {
      $annonces = DB::table('articles')->where('category',$id)->get();
      return view('contentComponent')->with('annonces',$annonces);
    
      
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
