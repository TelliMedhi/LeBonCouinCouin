@extends('layouts.app')

@section('content')
<div class="container page">
	
	<div class="col-12 haut_page">
		<h2 id="titre_page"><b>Déposer une annonce</b></h2>
	</div>
	
	<div class="col-12">
	
	<form action="{{ route('article.store')}}" method="post" enctype="mutlipart/form-data">
	{{ csrf_field() }}
		<div class="card">
          <div class="card-header">
            Votre annonce
          </div>
          
          <div class="card-body col-6">
            
            <label class="label">Catégorie *</label>
            
            
            
            <select name="category" id="category" class="col-12">
            	<option value="0">Choisissez une catégorie</option>
            	<option value="1">Ordinateur</option>
            
            
            
            </select>
            
            
            
            <label class="label mt-3">Titre de l'annonce *</label>
            
            
            
            <input type ="text" name="titre" class="form-group col-12 inputAddAnnonce" >
            
            
            <label class="label mt-3">Texte de l'annonce *</label>
            
            
            ​<textarea id="txtArea" class="form-group col-12 inputTexarea" name="text" rows="10" cols="70"></textarea>
            
            <label class="label mt-3">Prix *</label>
            
            
            <input type ="text" name="prix" class="form-group col-12 inputAddAnnonce" id="monInput" onblur="addEuro(this.value)" >
            
            
            
        <!--      <input type="file" class="picture" accept="image/bmp,image/gif,image/jpeg,image/png" name="file" id="image0">-->
            
             <input type="file" class="picture"  name="image0" id="image0">
            
            <div class="form-group">
                <img id="preview" class="img-fluid" src="#" alt="">
            </div>
            
            <button type="submit"> ok</button>
          </div>
        </div>
        
        
        
        <div class="card mt-4">
          <div class="card-header">
            Localisation
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
        
        
        
           <div class="card mt-4">
          <div class="card-header">
            Vos informations
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
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