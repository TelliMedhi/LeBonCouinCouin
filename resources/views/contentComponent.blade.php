@extends('layouts.app')

@section('content')
<div class="container page">	
<div class="alert alert-dark container" role="alert">
    <div class="  col-12 row">
        <div class="container col-6 row">
         <input class="form-control mr-sm-2" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
            <div class="col-7">
                 <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><p>Recherche dans le titre uniquement</p></label>
                  </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><p>Annonces Urgente uniquement</p></label>
    			 </div>
			</div>
            <div class="col-5">
                <div class="btn-group Dropdown">
                      <button type="button" class="btn btn-warning">Action....................</button>
                      <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
  						</div>
                </div>
       
			</div>
		
		</div>
		<div class=" col-6">
		    <div class="col-12 row">
		     <div class="col-6">
	            <div class="btn-group ">
                      <button type="button" class="btn btn-warning">Action..........................</button>
                      <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
  						</div>
  					</div>
  					 <input class="form-control mr-sm-2 Dropdown" type="search" placeholder="Que recherchez-vous?" aria-label="Search">
  					
  				</div>
  			<div class="col-6">
  			<button type="button" class="btn btn-primary  btn-block">rechercher</button>
  			 <a class="nav-link active Es1" href="#">Sauvegarder la recherche</a>
  			</div>
               </div>
       
			</div>
		</div>
		
	</div>
    
	<big>Annonce:Rhone-Alpes</big>
	<div class=" text-center">
	   <img class="pub " alt="" src="{{asset('/img/backup.jpg')}}">
	 </div>
	 <div class="container row blSouPub">
    	 <div class="col-3">
    	   <p>2 496 995 Annonces</p>
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
	  <div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   tries:plus récentes
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
	 </div>
	 <div class="col-12 row">
	
	
	@foreach($category as $annonce)
	 <div class="card col-8 row">
	  <div class="card-body row col-12">
	  <div class="imgCard col-4">
    <img class="card-img-top" src="{{asset($annonce->image0)}}" alt="Card image cap">
  </div>
   <div class="col-6">
  <a class="nav-link active" id="titleCard"href="#"><big>{{$annonce->text}}</big></a>
  <p>prix : {{$annonce->prix}}</p>
   </div>
 
  </div>

	</div>
	
	@endforeach
	
	
	
	<div class="col-4">
	<div class="card" style="width: 18rem;">
	<span class="badge col-3 badge-pill badge-warning">à la une</span>
  <img class="card-img-top" src="{{asset('/img/logoAppGoogle.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
	</div>
	
	
	
	

	










@endsection