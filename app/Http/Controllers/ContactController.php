<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\DB;




class ContactController extends Controller
{
    public function sendemail(Request $request)
    {    $count = DB::table('articles')->count();
        $content = $request['content'];
        $title = $request['title'];
        
        $id = $request['id'];
        $user_email = $request['email'];
        $user_email_annonce = $request['email_annonce'];
        $user_name = $request['name'];
        /*$title = "sujet1";
        $content = "je suis le contenu du mail";
        $user_email = "thib.du-42@hotmail.fr";
        $user_name = "nom du destinataire";*/
      
       
        try
        {
            $data = ['email_annonce' => $user_email_annonce ,'email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content ,'id' =>$id];
            Mail::send('emails/contact', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('titooare@gmail.com');
                $message->to($data['email'], 'test.ch')->subject($subject);
            });
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
            
        }
      
        return view ('/home')->with('count',$count)->with('messEnvMail','Votre message à bien été envoyé');
    }
    public function create()
    {
        return view('contact');
    }
   
    public function store(/*Request $request*/)
    {
        
  /*    Mail::to('titooare@gmail.com')
        ->send(new Contact($request->exept('tellimedhi@outlook.fr')));
        
        return view('comfirm');*/
      
    }
}
