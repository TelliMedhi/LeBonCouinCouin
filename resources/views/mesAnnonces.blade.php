@extends('layouts.app')

@section('content')
<div class="container page">	

  <div class="col-12 haut_page">
		<h2 id="titre_page"><b>Mes annonces</b></h2>
	</div>
  
           <div class="alert alert-dark col-12 row" role="alert">
            <div class=" col-12 col-md-6 row">
                 <input class="form-control mr-sm-2 col-12" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
                    
                   
                    <div class="col-12 col-md-5">
                    
                    	<form action="{{asset( '/mesAnnonces/category')}}" method="POST" enctype="multipart/form-data">
        							{{ csrf_field() }}      
        							
                           
        			</div>
    		
    		</div>
    		
    		<div class=" col-12 col-md-6 row">
    		    
    		     <div class="col-6">
    	            <div class="btn-group ">
                          
                          
                               
                              
                         
                                
                               <select name="category" id="" class="col-12 mb-4 form-control">
                                	<option value="0">Toutes catégories</option>
                                	<option value="1">Ordinateur</option>
                                	<option value="2">Téléphonie</option>
                                	<option value="3">Maison</option>
                                	<option value="4">Vêtements</option>
                                	<option value="5">Voitures</option>
                                	<option value="6">Motos</option>
                                	<option value="7">Console</option>
                                	<option value="8">Jeux video</option>
                                	<option value="9">Vélos</option>
                                	<option value="10">jeux & jouets</option>
                                	<option value="11">Objets de collection</option>
                                	<option value="12">Instruments de musique</option>
                
                
                
                				</select>
                			
            	
                			
      					</div>
      					
      					
      				</div>
          			<div class="col-6 ">
              				<button type="submit" class="btn btn-primary  btn-block ">rechercher</button>
              				
              			</form>
                    
              			 
          			
                   </div>
           
    			</div>
    		</div>
		<div class="col-3">
           <p><b>{{$count}} Annonces</b></p>
        </div>
	
	
	
	

	 
	 
	 
	 
	 
	<div class="col-12 row">
	   
    	 @if(!$annonces->isEmpty()) 
    	    
    	    @foreach($annonces as $annonce)
    	        <div class="col-12 col-md-9">
    	        <a href=" {{ URL::asset('annonce') }}/{{$annonce->id}} " class="  lienCard" style="text-decoration:none;">
    	        <div  class="col-12 row Cardcontent mb-4  pl-0">
    	        
    	        <div class="col-4 text-center imgCard">
    	        <img class="card-img-top" src="{{asset($annonce->image0)}}" alt="Card image cap">
    	        </div>
    	        <div class="col-8 row">
        	        <div class="col-9 mt-4">
                	        <h3 class="titreCard"><b>{{$annonce->titre}}</b></h3>
                	        <h4 class="prixCard"><b>{{$annonce->prix}} €</b></h4>
                	        <h5 class=""><b>{{$annonce->nom_category}} </b></h5>
        	        	
        	        </div>
        	        <div class="col-12 col-md-3">
        	        
            	        <form action="{{asset( '/Annonce/supprimer')}}/{{$annonce->id}}" method="POST" >
            	        {{ csrf_field() }} 
            	        	
            	        	<button type="submit" class="btn btn-danger mt-5 btn-block ">supprimer</button>
            	        </form>
        	        
        	        	</div>
        	        
        	        <div class="col-12 mt-4">
        	        <p>{{$annonce->code_postal}}<p>
        	        <p>{{$annonce->created_at}}<p>
        	        
        	        </div>
    	        </div>
    	        
    	        </div>
    	        </a>
    	        </div>
    	        
    	        @endforeach
    	        
    	       
    	       	
    	        @else
                    <div class="text-center mt-5 mb-5 col-12">
                 		<h2><b>  Aucune annonce trouvée !</b></h2> 
    
    				
                   </div>
        
				@endif
    </div>
</div>	

@endsection