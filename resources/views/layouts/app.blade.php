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
    @yield('css')
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a href="{{asset('/')}}"><img class="logo" src="{{asset('/img/Leboncoincoin.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="navbar-nav ml-auto">
    	
    	<li class=""><a class="nav-link" href="{{route ('article.create')}}"><img class="plus" src="{{asset('/img/+.png')}}">Déposer une annonce</a></li>
       
    
    </ul>
    
    <ul class="navbar-nav ml-auto">
    	
    	
        <li class=""><a class="nav-link" href="{{asset('/recherche')}}">Recherche</a></li>
    
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
                            <a class="nav-link active nav-link_footer " href="#">Qui sommes-nous ?</a>
                            <a class="nav-link active nav-link_footer " href="#">Nous rejoindre</a>
                            <a class="nav-link active nav-link_footer " href="#">Impact environnemental</a>
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
                        <a class="nav-link active nav-link_footer" href="#">Conditions générales d’utilisation</a>
                        <a class="nav-link active nav-link_footer " href="#">Règles de diffusion, de référencement et de déréférencement</a>
                        <a class="nav-link active nav-link_footer " href="#">Conditions Générales de Vente</a>
                        <a class="nav-link active nav-link_footer " href="#">Vie privée / cookies</a>
                        <a class="nav-link active nav-link_footer " href="#">Vos droits et obligations</a>
                        <a class="nav-link active nav-link_footer " href="#">Critères de classement</a>
                        
                        
                        
                        
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
                        <a class="nav-link active nav-link_footer" href="#">Publicité</a>
                        <a class="nav-link active nav-link_footer " href="#">Professionnels de l’immobilier</a>
                        <a class="nav-link active nav-link_footer " href="#">Vos recrutements</a>
                         <a class="nav-link active nav-link_footer" href="#">Toutes nos solutions pros</a>
                      </div>
                      
                    </div>
                
                
                <div class=" col-6 col-md-3 mt-0 pt-0">
                    <div class=" block1 pfooter">
                    
                        <p>DES QUESTIONS ?</p>
                    </div>
                     <div class="">
                        <a class="nav-link active nav-link_footer " href="#">Aide</a>
                        <a class="nav-link active nav-link_footer " href="#">Nous contacter</a>
                        
                    </div>
                    <div class=" block1 pfooter p_2responsive">
                       <p>VOUS ÊTES À L'ÉTRANGER</p>
                    
                    </div>
            
            
           
             
         	</div>
         </div>
         
         <div class="container d-flex justify-content-center block5 pfooter"><p class="block6">Partenaires :
                <a class="link active nav-link_footer " href="#">le coicoin Credit-</a>
                <a class="link active nav-link_footer " href="#">leboncoincoin Emploi Cadres</a>-
                <a class="link active nav-link_footer " href="#">Agriaffaires</a>-
                <a class="link active nav-link_footer " href="#">MachineryZone</a>-
                <a class="link active nav-link_footer " href="#">leDénicheur</a>-
                <a class="link active nav-link_footer " href="#">AVendreALouer</a>-
                <a class="link active nav-link_footer " href="#">leboncoincoin Immobilier Neuf</a>-
                <a class="link active nav-link_footer " href="#">Videdressing</a></p>
         </div>
         
        </div>
     </div>
    <div class="container pfooter" id="creation2">
    	<p id="creation">Le boncoincoin 2018-2019</p>
    </div>
    
    </nav> 

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

</body>
</html>
