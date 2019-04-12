@extends('layouts.app')

@section('content')


<div class="container page mb-4"> 
    <div class="col-12 "> 
    <div class="row">

        <div class="contentFormMess col-6">
            <p>Envoyer un message à : {{$annonce->name}}</p>

                <form action ="{{asset('/mail')}}"method='Post'class="needs-validation" novalidate>
                {{ csrf_field() }}
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                       <div class="container row">
                              <label for="validationCustom02">Votre nom</label>
                              <input type="text" class="form-control" name='name' id="validationCustom02" placeholder="Last name" value="Votre nom" required>
                                  
                               <div class="valid-feedback">
                                    Looks good!
                                  </div>
                             <input type="text" class="form-control" name='subject' id="validationCustom02" placeholder="Last name" value="" required>
                                  
                         </div>
   
                       <label for="validationCustomUsername">adresse-mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                           </div>
        				</div>
      			   <select name="id" id="category" class="col-12"> <option value="{{$annonce->id}}">{{$annonce->id}}</option> </select>
      					
                        <select name="email" id="category" class="col-12"> <option value="{{$annonce->email}}">{{$annonce->email}}</option> </select>
                            <div class="invalid-feedback">
                              Votre adresse-mail ou votre nom n'est pas valide ou n'existe pas.
                            </div>
                   </div>
  
                			<div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Taper votre message</span>
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
            <div class="contentFormMess col-6">

                <p>Résumé de l'annonce</p>
                <div class="contentFormResum">
                <p>{{$annonce->name}}</p>
                <p>{{$annonce->prix}}</p>
                <p>{{$annonce->created_at}}</p>
                </div>
                <p>Description</p>
                <p>{{$annonce->text}}</p>
                <p>localisation</p>
                <p>{{$annonce->code_postal}}</p>
                <p>{{$annonce->ville_nom}}</p>
             </div>
      </div>{{$annonce->email}}
      </div>
</div>









@endsection