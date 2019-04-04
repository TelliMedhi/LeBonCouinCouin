@extends('layouts.app')

@section('content')
<div class="container page">
    <div class="col-12 ">
        <div class="row">
        
            <div class="col-12 col-md-8">
           @foreach ( $annonces as $annonce	)
            <a href="../annonce/{{ $annonce->id}}">	<div class="card col-12 " >
                  <center><img src="{{asset($annonce->image0)}}" class="" id="image_annonce" alt="..."></center>
                  <div class="card-body">
                    <h2><b>{{$annonce->titre}}</b></h2>
                    <h3 id="prix_annonce"><b>{{$annonce->prix}} €</b></h3>
                    <p>{{$annonce->created_at}}</p>
                  </div>
                  
                </div></a>
            
            @endforeach   
        	
            
        </div>
    </div>
</div>
</div>

@endsection
