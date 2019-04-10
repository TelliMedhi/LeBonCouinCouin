@extends('layouts.app')

@section('content')
<div class="container page">	

  
  
           <div class="alert alert-dark col-12 row" role="alert">
            <div class=" col-12 col-md-6 row">
                 <input class="form-control mr-sm-2 col-12" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
                    
                    <div class="col-12 col-md-7 row">
                             
                             <div class="form-check col-6 col-md-12">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><p class="label_recherche">Recherche dans le titre uniquement</p></label>
                              </div>
                            <div class="form-check col-6 col-md-12">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><p class="label_recherche">Annonces Urgente uniquement</p></label>
                			 </div>
        			
        			</div>
                    <div class="col-12 col-md-5">
                    
                    	<form action="{{asset( '/category')}}" method="POST" enctype="multipart/form-data">
        							{{ csrf_field() }}      
        							
                                        <select name="region" id="" class="col-12 mt-4 form-control">
                                        	<option value="0">Toute la France </option>
                                        	<option value="1">Alsace</option>
                                        	<option value="2">Aquitaine</option>
                                        	<option value="3">Auvergne</option>
                                        	<option value="4">Basse-Normandie</option>
                                        	<option value="5">Bourgogne</option>
                                        	<option value="6">Bretagne</option>
                                        	<option value="7">Centre</option>
                                        	<option value="8">Champagne-Ardenne</option>
                                        	<option value="9">Corse</option>
                                        	<option value="10">Franche-Comté</option>
                                        	<option value="11">Haute-Normandie</option>
                                        	<option value="12">Ile-de-France</option>
                                        	<option value="13">Languedoc-Roussillon</option>
                                        	<option value="14">Limousin</option>
                                        	<option value="15">Lorraine</option>
                                        	<option value="16">Midi-Pyrénées</option>
                                        	<option value="17">Nord-Pas-de-Calais</option>
                                        	<option value="18">Pays de la Loire</option>
                                        	<option value="19">Picardie</option>
                                        	<option value="20">Poitou-Charentes</option>
                                        	<option value="21">Provence-Alpes-Côte d'Azur</option>
                                        	<option value="22">Rhône-Alpes</option>
                                       
                                    </select>
               
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
      					 <input class="form-control mr-sm-2 Dropdown" name="code_postal" type="search" placeholder="code postal" aria-label="Search">
      					
      				</div>
          			<div class="col-6 ">
              				<button type="submit" class="btn btn-primary  btn-block ">rechercher</button>
              			
              			</form>
                    
              			 
          			
                   </div>
           
    			</div>
    		</div>
		
	
	
	
	
    	<div class="col-12">
        	<big>Annonce:Rhone-Alpes</big>
        	<div class=" text-center col-12">
        	   <img class="pub col-12" alt="" src="{{asset('/img/backup.jpg')}}">
        	 </div>
        	 <div class=" row blSouPub">
            	 <div class="col-3">
            	   <p>{{$count}} Annonces</p>
            	 </div>
            	 <div class="col-5">
            	   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">Particuliers 2 278 799</label>
                   </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">Professionnels 218 196</label>
                  </div>
            	</div>
        	  
        	 </div>
	 	</div>
	 
	 
	 
	 
	 
	<div class="col-12 row">
	   
    	<?php if(!$annonces->isEmpty()) { ?>
    	    
    	    @foreach($annonces as $annonce)
    	        <div class="col-12 col-md-9">
    	        <a href=" {{ URL::asset('annonce') }}/{{$annonce->id}} " class="  lienCard" style="text-decoration:none;">
    	        <div  class="col-12 row Cardcontent mb-4  pl-0">
    	        
    	        <div class="col-4 text-center imgCard">
    	        <img class="card-img-top" src="{{asset($annonce->image0)}}" alt="Card image cap">
    	        </div>
    	        <div class="col-8">
    	        <div class="col-12 mt-4">
    	        <h3 class="titreCard"><b>{{$annonce->titre}}</b></h3>
    	        <h4 class="prixCard"><b>{{$annonce->prix}} €</b></h4>
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
    	        <?php 
                } else {
                    ?>
                    <div class="text-center mt-5 mb-5 col-12">
                 		<h2><b>  Aucune annonce trouvée !</b></h2> 
    
    					<p>Pas de résultats dans cette catégorie? Nous vous conseillons 
    					de changer de catégorie <br>ou d'opter pour la famille de 
    					catégories dans laquelle se trouve cette catégorie.</p>
                   </div>
                    <?php 
                }
         ?>
	    

    </div>
</div>	

@endsection