@extends('layouts.app')

@section('content')
<div class="container page">
	
	<div class="col-12 haut_page">
		<h2 id="titre_page"><b>Déposer une annonce</b></h2>
	</div>

	<div class="col-12 mb-5 addAnnonce ">
	<!--  <img  src="{{asset('/storage/images/1ZS5eXFcdtpNV2zOe2vIYuWl0cP7lOb5w4TBO9J7.png')}}">-->
	<form action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="card">
          <div class="card-header">
            Votre annonce
          </div>
          
          <div class="card-body col-12 col-md-6">
            
            <label class="label">Catégorie *</label>
            
            
            
            <select name="category" id="category" class="col-12">
            	<option value="0">Choisissez une catégorie</option>
            	<option value="1">Ordinateur</option>
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
            
            
            
            </select>
            
            
            
            <label class="label mt-3">Titre de l'annonce *</label>
            
            
            
            <input type ="text" name="titre" class="form-group col-12 inputAddAnnonce" >
            
            
            <label class="label mt-3">Texte de l'annonce *</label>
            
            
            ​<textarea id="txtArea" class="form-group col-12 inputTexarea" name="text" rows="10" cols="70"></textarea>
            
            <label class="label mt-3">Prix *</label>
            
            
            <input type ="text" name="prix" class="form-group col-12 inputAddAnnonce" id="monInput" onblur="addEuro(this.value)" >
            
                <div class="image-upload">
                  <label for="image0">
                    <img src="{{asset('/img/pictograms-nps-misc-camera.png')}}"/>
                  </label>
                
                  <input type="file" class="picture" accept="image/bmp,image/gif,image/jpeg,image/png" name="image0" id="image0">
                </div>
                
            
              
            
              <!--   <input type="file" name="image0" />-->
            
            <div class="form-group">
                <img id="preview" class="img-fluid" src="#" alt="">
            </div>
            
            
          </div>
        </div>
        
        
        
        <div class="card mt-4">
          <div class="card-header">
            Localisation
          </div>
          <div class="card-body row">
              
          <div class="card-body col-12 col-md-8">
            
           
            <label class="label mt-3">Code postal *</label>
            
            <input type ="text" name="code_postal" class="form-group col-12 inputAddAnnonce" >
            
             <label class="label mt-3">Région *</label>
            
            
            
             <select name="region" id="category" class="col-12">
            	<option value="0">Choisissez une Région</option>
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
          <div class="col-12 col-md-4">
               <img class="map_annonce" src="{{asset('/img/map_france.png')}}">
          </div>
        </div>
        </div>
        
        
           <div class="card mt-4 mb-5">
          <div class="card-header">
            Vos informations
          </div>
          <div class="card-body">
          <label class="label mt-3">Email *</label>
          <select name="email" id="category" class="col-12">
            	<option value="{{ $user->email}}">{{ $user->email}}</option>
            	
           
            </select>
             
           
          </div>
        </div>
        
        	<div class="col-12">
        	<button  class="btn btn-primary col-4" type="submit">Valider</button>
        	</div>
        </form>
	
	</div>
    	
   
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	<!--  <form action="{{ route('article.store')}}" method="POST">
    		{{ csrf_field() }}
    		<div class="form-group">
    		
    			<input type ="text" name="name" class="form-group" >
    			
    			<button type="submit"> ok</button>
    		</div>
    		
    	
    	
    	</form>-->
		

</div>


@endsection
@section('script')
    <script>
        $(() => {
            $('input[type="file"]').on('change', (e) => {
                let that = e.currentTarget
                if (that.files && that.files[0]) {
                    $(that).next('.custom-file-label').html(that.files[0].name)
                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $('#preview').attr('src', e.target.result)
                    }
                    reader.readAsDataURL(that.files[0])
                }
            })
        })
    </script>
@endsection