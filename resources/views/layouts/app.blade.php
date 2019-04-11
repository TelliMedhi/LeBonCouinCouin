<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Album') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleFooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
      
    @yield('css')
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a href="{{asset('/home')}}"><img class="logo" src="{{asset('/img/Leboncoincoin.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="navbar-nav ml-auto">
    	
    	<li class=""><a class="nav-link" href="{{route ('article.create')}}"><img class="plus" src="{{asset('/img/+.png')}}">Déposer une annonce</a></li>
       
    
    </ul>
    
    <ul class="navbar-nav ml-auto">
    	
    	
        <li class=""><a class="nav-link" href="{{asset('/home')}}">Recherche</a></li>
    
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        
            @guest
            <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
            <li class="nav-item{{ currentRoute(route('register')) }}"><a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
            @else
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>

@yield('content')

<footer>

    <nav class="navbar navbar-dark bg-dark">
    
     <div class="container mt-0 pt-0 ">
     	
     	<div class="row">
     		<div class="haut_footer row  pb-5 col-12" >
        
                	<div class=" col-6 col-md-3 ">
                    	<div class=" block1 pfooter ">
                        	<p>À PROPOS DU BONCOINCOIN</p>
                    	</div>
                        
                        <div class="">
                            <a class="nav-link active" href="#">Qui sommes-nous ?</a>
                            <a class="nav-link active" href="#">Nous rejoindre</a>
                            <a class="nav-link active" href="#">Impact environnemental</a>
                        </div>
                        
                        <div class=" block1 pfooter">
                          <p>NOS FUTUR APPLICATIONS</p>
                        </div>
                        
                        <div class=" blockImg row ">
                       		
                       		<div class="col-12 col-md-6 ">
                       			<img class="img_footer" alt="" src="{{asset('/img/logoAppApple.png')}}">
                       		</div>
                       		
                       		<div class="col-12 col-md-6 ">
                       			<img class="img_footer" alt="" src="{{asset('/img/logoAppGoogle.png')}}">
                       		</div>
                            
                            
                            
                        </div>
                    	  
               	</div>
               
                
                <div class=" col-6 col-md-3">
                    <div class=" block1 pfooter">
                        <p>INFORMATION LÉGALES</p>
                    </div>
                     <div class="">
                        <a class="nav-link active" href="#">Conditions générales d’utilisation</a>
                        <a class="nav-link active" href="#">Règles de diffusion, de référencement et de déréférencement</a>
                        <a class="nav-link active" href="#">Conditions Générales de Vente</a>
                        <a class="nav-link active" href="#">Vie privée / cookies</a>
                        <a class="nav-link active" href="#">Vos droits et obligations</a>
                        <a class="nav-link active" href="#">Critères de classement</a>
                        
                        
                        
                        
                      </div>
                      
                          <div class=" block1 pfooter p_responsive">
                           	<p>VOUS ÊTES À L'ÉTRANGER</p>
                        </div>
                </div>
                
                
                <div class=" col-6 col-md-3">
                    <div class=" block1 pfooter">
                    <p>PROFESSIONNELS</p>
                    </div>
                     <div class="">
                        <a class="nav-link active" href="#">Publicité</a>
                        <a class="nav-link active" href="#">Professionnels de l’immobilier</a>
                        <a class="nav-link active" href="#">Vos recrutements</a>
                         <a class="nav-link active" href="#">Toutes nos solutions pros</a>
                      </div>
                      
                    </div>
                
                
                <div class=" col-6 col-md-3 mt-0 pt-0">
                    <div class=" block1 pfooter">
                    
                        <p>DES QUESTIONS ?</p>
                    </div>
                     <div class="">
                        <a class="nav-link active" href="#">Aide</a>
                        <a class="nav-link active" href="#">Nous contacter</a>
                        
                    </div>
                    <div class=" block1 pfooter p_2responsive">
                       <p>VOUS ÊTES À L'ÉTRANGER</p>
                    
                    </div>
            
            
           
             
         	</div>
         </div>
         
         <div class="container d-flex justify-content-center block5 pfooter"><p class="block6">Partenaires :
                <a class="link active" href="#">le coicoin Credit-</a>
                <a class="link active" href="#">leboncoincoin Emploi Cadres</a>-
                <a class="link active" href="#">Agriaffaires</a>-
                <a class="link active" href="#">MachineryZone</a>-
                <a class="link active" href="#">leDénicheur</a>-
                <a class="link active" href="#">AVendreALouer</a>-
                <a class="link active" href="#">leboncoincoin Immobilier Neuf</a>-
                <a class="link active" href="#">Videdressing</a></p>
         </div>
         
        </div>
     </div>
    <div class="container pfooter" id="creation2">
    	<p id="creation">Le boncoincoin 2018-2019</p>
    </div>
    
    </nav>

</footer>



<script src="{{ asset('js/app.js') }}"></script>

@yield('script')
<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
   <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		
</body>
</html>
