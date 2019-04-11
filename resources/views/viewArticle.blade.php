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
                		<div id="map">
        			<!-- Ici s'affichera la carte -->
        		</div>
                	<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = {{$annonce->latitude}};
			var lon = {{$annonce->longitude}};
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                var marker = L.marker([lat, lon]).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
                </div>
                
            </div>
            
            <div class="col-12 col-md-4">
            	<div class="card col-12 " >
            		<div class="description pt-4 pb-4 row">
            			<div class="col-3 img-avatar">
                      		<img src="{{asset('/img/avatar-1299805_640.png')}}" class="card-img-avatar " alt="...">
                      	</div>
                      	<div class="col-9">
                      		<h3><b>{{$annonce->name}}</b></h3>
                      	</div>
                     </div>
                  <div class="card-body p-0 mt-4 mb-4">
                  
                    <button type="button" class="btn btn-info col-12 mb-2 button_numero_message" id="bouton_localisation">Voir la localisation</button>
                    <a href=" {{ URL::asset('formMessage') }}/{{$annonce->id}} ">
                    <button type="button" id="bouton_email" class="btn btn-info col-12 mt-2 button_numero_message">Envoyer un message</button></a>
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
		document.getElementById("bouton_email").innerHTML = "<h4><b></b>{{$annonce->email}}</h4>";
	});
	$("#bouton_localisation").click(function(){
		document.getElementById("bouton_localisation").innerHTML = "<h4><b>code postal : {{$annonce->code_postal}}<b><h4>";
	});
	   
});

	
</script>
@endsection

