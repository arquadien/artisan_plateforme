<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
  <title>packs publicitaire</title>
</head>

<body>

  <!--DEBUT NAVBAR -->
  </div>
    <img  id="imagepacks" src="{{asset('asset/image/packs.jpg')}}" alt='' />
  </div>

       
  <nav class="navigation fixed-top">
    <a class="logo" href="#">ArtisanExpress</a>
    <div class="nav-link">
        <ul>
            <li>
              <a href="{{ route('accueil') }}">Acceuil</a>
            </li>
            <li >
              <a href="{{route('formulaire_de_service')}}">Demande de services</a>
            </li>
            <li >
              <a href="{{route('abonnement')}}">Packs publicitaires</a>
            </li>
            <li >
              <a href="{{ route('contact') }}">Contact</a>
            </li>

          </ul>
          @guest
          <button  id="btn1" class="btn"> <a href="{{route('enregistrementForm')}}">S'inscrire</a></button>
          <button id="btn2" class="btn "> <a href="{{route('connexionForm')}}">Se connecter</a> </button>
          @endguest
        </div>
        @auth
          <div class="user-profil">
           <img src="storage\{{ Auth::user()->photo }}" alt="" class="user-img" onclick="toggleMenu()">

            <div class="menu-wrap" id="subMenu">
              <div class="sub-menu ">
                <div class="user-2">
                  <img src="astorage\{{ Auth::user()->photo }}" class="user-imgs" alt="">
                  <h3>{{ Auth::user()->nom }}</h3>
                </div>
                <hr>
                <a href="{{ route('profil') }}" class="user-icone">
                  <i class="fa-solid fa-user"></i>
                  <p>Mon profil</p>
                 
                </a>
                
                <a href="#" class="user-icone">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <form action="{{route('logout')}}" method="post">
                    @method("delete")
                    @csrf
                    <button style="border: none; background: none;">se déconnecter</button>
                  </form>
                 
                </a>
              </div>
            </div>
          </div>
        @endauth

    <div class="iconebars"> <i class="fa-solid fa-bars"></i></div>
  </nav>
  <!--FIN NAVBAR -->

  <div>
      <h1 class="h1packs">PACKS PUBLICITAIRES</h1>
    </div>

  <div class="container w-75 mt-5" id="parent">

    <div class="mb-4">
      <h2 class="fw-bold text-center"> DECOUVREZ NOS DIFFERENTES PACKS PUBLICITAIRES
        ADAPTÉES À VOS BESOINS</h2>

    </div>
    <div class="row">
      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4>Basique </h4>
            <p> 3000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ Mise en avant de votre profil dans les resultats de recherche</p>
            <p>✔️ Modification des couleurs du profil de l’artisan </p>
            <p>✔️ Visibilité des avis de l’artisan par le client. </p>
            <p>✔️Visibilité local</p> <br>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="{{route('paiement')}}">Souscrire</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4> Standard </h4>
            <p> 5000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ tous les avantages du packs basique</p>
            <p>✔️	Un service client plus rapide et efficace.</p>
         <p> ✔️ Mis avant de votre profils sur nos different reseaux sociaux</p>
         <p>✔️ Soutien marketing</p>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="{{route('paiement')}}">Souscrire</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4> Premium</h4>
            <p> 15000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ tous les avantages du packs basique et standard</p>
          
            <p>✔️ conception de contenus uniques et personnalisés pour refléter l'identité de l'artisan</p>
            <p>✔️ accès a des salons ou foire artisanales pour présenter les produits directement au public</p>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="{{route('paiement')}}">Souscrire</a>
          </div>
        </div>
      </div>





    </div>
  </div>






  <!---DEBUT DE FOOTER-->

  @extends('Layout.footer')

  <!--- FIN DE FOOTER-->




<script src="asset/js/jquery.min3.js"></script>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script>

let menuWrap = document.querySelector('.menu-wrap');
function toggleMenu() {
    menuWrap.classList.toggle('open-menu');
}

  $(document).ready(function() {
    const menuHamburger = document.querySelector(".fa-bars");
    const navLink = document.querySelector(".nav-link");

  if (menuHamburger && navLink) {
    menuHamburger.addEventListener('click', function() {
      navLink.classList.toggle('mobilemenu');
    });
  }
});
  </script>
</body>

</html>