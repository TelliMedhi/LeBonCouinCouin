@extends('layouts.app')

@section('content')


<div class="container page mb-4"> 
    <div class="col-12 "> 
    <div class="row">

        <div class="contentFormMess col-12 col-md-6">
           <h4><b>Envoyer un message à : {{$annonce->name}}</b></h4>

                <form action ="{{asset('/mail')}}"method='Post'class="needs-validation" novalidate>
                {{ csrf_field() }}
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                       <div class="container row">
                              <label for="validationCustom02">Votre nom</label>
                              <input type="text" class="form-control" name='name' id="validationCustom02" placeholder="nom" required>
                                  
                               <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                   <label for="validationCustomUsername">Adresse-email</label>
                             	<input type="text" class="form-control" name='email_annonce' id="validationCustom02" placeholder="email" value="" required>
                                  
                         </div>
   
                      
                        <div class="input-group">
                            <div class="input-group-prepend">
                           </div>
        				</div>
      			   <select name="id" id="" class="col-12  " style="display:none;"> <option value="{{$annonce->id}}">{{$annonce->id}}</option> </select>
      					<input type="text" class="form-control" name='title' id="validationCustom02" style="display:none;" placeholder="email" value="{{$annonce->titre}}" required>
                        <select name="email" id="" class="col-12 " style="display:none;"> <option value="{{$annonce->email}}">{{$annonce->email}}</option> </select>
                            <div class="invalid-feedback">
                              Votre adresse-mail ou votre nom n'est pas valide ou n'existe pas.
                            </div>
                   </div>
  
                			<div class="input-group">
                                  <div class="input-group-prepend">
                                    <label for="validationCustom02">Taper votre message</label>
                                  </div>
                                    ​<textarea  class="form-group col-12 " name="content" rows="10" cols="70"></textarea>  
                            </div>
                 </div>

                          <button class="btn btn-warning btnFormMessage" type="submit">Envoyer votre message</button>
                </form>

                            <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                  }, false);
                                });
                              }, false);
                            })();
                            </script>

           </div>
            <div class="contentFormMess col-12 col-md-6">

                <h4><b>Résumé de l'annonce</b></h4>
                <div class="contentFormResum">
                    <h5>{{$annonce->titre}}</h5>
                    <h5 class="prixCard"><b>{{$annonce->prix}} €</b></h5>
                    <p>{{$annonce->created_at}}</p> 
                    <p>par <b>{{$annonce->name}}</b></p>
                </div>
                <div class="contentFormResum">
                    <h4 class="mt-3"><b>Description</b></h4>
                    <p>{{$annonce->text}}</p>
                </div>
                <div class="contentFormResum">
                	 <h4 class="mt-3"><b>localisation</b></h4>
                    
                    <p>{{$annonce->ville_nom}} {{$annonce->code_postal}}</p>
                    
                </div>
             </div>
      </div>
      </div>
</div>









@endsection