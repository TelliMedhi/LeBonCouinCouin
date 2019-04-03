@extends('layouts.app')

@section('content')
<div class="container page">
    <div class="col-12 ">
        <div class="row">
        
            <div class="col-12 col-md-8">
            	<div class="card col-12 " >
                  <center><img src="{{asset($annonce->image0)}}" class="" id="image_annonce" alt="..."></center>
                  <div class="card-body">
                    <h2><b>{{$annonce->titre}}</b></h2>
                    <h3 id="prix_annonce"><b>{{$annonce->prix}} €</b></h3>
                    <p>{{$annonce->created_at}}</p>
                  </div>
                </div>
                <div class="col-12 description  mt-5 pt-3 pb-5">
                	 <h4><b>Description</b></h4>
                	 <p>{{$annonce->text}}</p>
                </div>
                <div class="col-12 description mb-5  pt-3 pb-5">
                	<h4><b>Localisation</b></h4>
                	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.4798059267296!2d4.438845314885617!3d45.50041913904805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5ab3cca308903%3A0x1c093cb3290e5b70!2s42290+Sorbiers!5e0!3m2!1sfr!2sfr!4v1554319221035!5m2!1sfr!2sfr" width="680" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
            </div>
            
            <div class="col-12 col-md-4">
            	<div class="card col-12 " >
            		<div class="description pt-4 pb-4 row">
            			<div class="col-3 img-avatar">
                      		<img src="{{asset('/img/avatar-1299805_640.png')}}" class="card-img-avatar " alt="...">
                      	</div>
                      	<div class="col-9">
                      		<h3><b>{{$annonce->prenom}}</b></h3>
                      	</div>
                     </div>
                  <div class="card-body p-0 mt-4 mb-4">
                  
                    <button type="button" class="btn btn-info col-12 mb-2 button_numero_message" id="bouton_localisation">Voir la localisation</button>
                    <button type="button" id="bouton_email" class="btn btn-info col-12 mt-2 button_numero_message">Envoyer un message</button>
                  </div>
                </div>
            </div>
        	
            
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#bouton_email").click(function(){
		document.getElementById("bouton_email").innerHTML = "<h4><b>{{$annonce->email}}</b></h4>";
	});
	$("#bouton_localisation").click(function(){
		document.getElementById("bouton_localisation").innerHTML = "<h4><b>code postal : {{$annonce->code_postal}}<b><h4>";
	});
	   
});

	
</script>
@endsection

