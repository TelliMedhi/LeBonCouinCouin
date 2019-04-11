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
     * 
     */
    
    
    public function acceuil()
    {
        $count = DB::table('articles')->count();
        
        
        return view('/home')->with('count',$count);
    }
    
    
    public function index()
    {
        $count = DB::table('articles')->count();
        
        $annonce =  DB::table('articles')
        
        ->orderBy('id','desc')->get();
        
        //$annonces = Article::all()->orderBy('id','desc')->get();
        
        return view('contentComponent')->with('annonces', $annonce)->with('count',$count);
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
       
        $postal = DB::table('villes_france_free')
        ->SELECT('ville_longitude_deg','ville_latitude_deg')
        ->where( 'ville_code_postal', $request['code_postal'])->first();
         
        Article::create(
            [
            'category' => $request['category'],
             'titre' => $request['titre'],
             'text' => $request['text'],
             'prix' => $request['prix'],
             'image0'=> $images,
             'code_postal' => $request['code_postal'],
             'region' => $request['region'],
             'user_id'=> auth()->id(),
             'longitude' => $postal->ville_longitude_deg,
             'latitude'=> $postal->ville_latitude_deg,
        ]);
        
      
        
        $count = DB::table('articles')->count();
        
        
        return view('/home')->with('count',$count)->with('annonce_ok','Annonce bien ajouté.');
        
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
        
        
        $count = DB::table('articles')->count();
        
        $annonces = DB::table('articles')->where('region', $id)->orderBy('id','desc')->get();
        
        return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
        
        
        
    }
    

    public function category()
    {
        $id_category =$_POST['category'];
        
        $id_region = $_POST['region'];
        
        $code_postal = $_POST['code_postal'];
        
        $count = DB::table('articles')->count();
        
        if (($_POST['category'] == 0 & $_POST['region'] == 0 & $_POST['code_postal'] == null ) )
        {
            return redirect()->action('ArticleController@index');
        }
        elseif(($_POST['category'] !== 0 & $_POST['region'] == 0 & $_POST['code_postal'] == null)){
            
            $annonces = DB::table('articles')->where('category',$id_category)->orderBy('id','desc')->get();
            return view('contentComponent')->with('annonces',$annonces)->with('count',$count);
            
        }
        elseif(($_POST['category'] == 0 & $_POST['region'] !== 0 & $_POST['code_postal'] == null)){
            
            $annonces = DB::table('articles')->where('region', $id_region)->orderBy('id','desc')->get();
            
            return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
            
        }
        elseif(($_POST['category'] == 0 & $_POST['region'] == 0 & $_POST['code_postal'] !== null)){
            
            $annonces = DB::table('articles')->where('code_postal', $code_postal)->orderBy('id','desc')->get();
            
            return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
            
        }
        elseif(($_POST['category'] !== 0 & $_POST['region'] !== 0 & $_POST['code_postal'] == null)){
            
            $annonces = DB::table('articles')->where('category',$id_category)->where('region',$id_region)->orderBy('id','desc')->get();
            
            return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
            
        }
        elseif(($_POST['category'] !== 0 & $_POST['region'] == 0 & $_POST['code_postal'] !== null)){
            
            $annonces = DB::table('articles')->where('category',$id_category)->where('code_postal', $code_postal)->orderBy('id','desc')->get();
            
            return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
            
        }
        elseif(($_POST['category'] == 0 & $_POST['region'] !== 0 & $_POST['code_postal'] !== null)){
            
            $annonces = DB::table('articles')->where('region',$id_region)->where('code_postal', $code_postal)->orderBy('id','desc')->get();
            
            return view('contentComponent')->with('annonces', $annonces )->with('count',$count);
            
        }
        else{
            
            $annonces = DB::table('articles')->where('category',$id_category)->where('region',$id_region)->where('code_postal', $code_postal)->orderBy('id','desc')->get();
        return view('contentComponent')->with('annonces',$annonces)->with('count',$count);
        }
    
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
