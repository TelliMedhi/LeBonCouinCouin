@extends('template')



@section('footer')
<nav class="navbar navbar-dark bg-dark">

 <div class="container">
    
    <div class="row col-3">
        <div class="container block1">
            <p>À PROPOS DU BONCOINCOIN</p>
        </div>
        <div class="container">
            <a class="nav-link active" href="#">Qui sommes-nous ?</a>
            <a class="nav-link active" href="#">Nous rejoindre</a>
            <a class="nav-link active" href="#">Impact environnemental</a>
        </div>
        <div class="container block1">
          <p>NOS FUTUR APPLICATIONS</p>
        </div>
        <div class="container blockImg">
       
            <img alt="" src="{{asset('/img/logoAppApple.png')}}">
            <img alt="" src="{{asset('/img/logoAppGoogle.png')}}">
            
        </div>
        <div class="container blockVide1"></div>    
   </div>
    
    <div class="row col-3">
        <div class="container block2 ">
            <p>INFORMATION LÉGALES</p>
        </div>
         <div class="container">
            <a class="nav-link active" href="#">Conditions générales d’utilisation</a>
            <a class="nav-link active" href="#">Règles de diffusion, de référencement et de déréférencement</a>
            <a class="nav-link active" href="#">Conditions Générales de Vente</a>
            <a class="nav-link active" href="#">Vie privée / cookies</a>
            <a class="nav-link active" href="#">Vos droits et obligations</a>
            <a class="nav-link active" href="#">Critères de classement</a>
            
            
            
            
          </div>
    </div>
    
    <div class="row col-3">
        <div class="container block3 ">
        <p>PROFESSIONNELS</p>
        </div>
         <div class="container">
            <a class="nav-link active" href="#">Publicité</a>
            <a class="nav-link active" href="#">Professionnels de l’immobilier</a>
            <a class="nav-link active" href="#">Vos recrutements</a>
             <a class="nav-link active" href="#">Toutes nos solutions pros</a>
          </div>
          <div class="container blockVide2"></div> 
        </div>
    
    <div class="row col-3">
        <div class="container block4 ">
        
            <p>DES QUESTIONS ?</p>
        </div>
         <div class="container">
            <a class="nav-link active" href="#">Aide</a>
            <a class="nav-link active" href="#">Nous contacter</a>
            
        </div>
        <div class="container block1">
           <p>VOUS ÊTES À L'ÉTRANGER</p>
        
        </div>
        <div class="dropdown col-12">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown................
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
            </div>
        </div>
        <div class="container blockVide3"></div> 
     </div>
     <div class="container d-flex justify-content-center block5"><p class="block6">Partenaires :
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
<div class="container" id="creation2">
<p id="creation">Le boncoincoin 2018-2019</p>
</div>

</nav>




















@endsection