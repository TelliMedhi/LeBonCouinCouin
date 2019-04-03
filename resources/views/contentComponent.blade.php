@extends('template')

@section('content')
<div class="container">	
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
	 <div class="container">
	 <big>2 496 995 Annonces</big>
	 </div>
	</div>
	
	
	
	

	










@endsection