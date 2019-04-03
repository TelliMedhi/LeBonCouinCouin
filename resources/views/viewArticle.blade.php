@extends('layouts.app')

@section('content')
<div class="container page">
    <div class="col-12 ">
        <div class="row">
        
            <div class="col-8">
            	<div class="card col-12" >
                  <img src="{{asset($annonce->image0)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h2>{{$annonce->titre}}</h2>
                    <h3 id="prix_annonce">{{$annonce->prix}}€</h3>
                    <p>{{$annonce->created_at}}</p>
                  </div>
                </div>
            </div>
            
            <div class="col-4">
            
            </div>
        	
            
        </div>
    </div>
</div>

@endsection

