<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>Contact</title>
</head>
<body>
    <div>
      <div>
        <h1 class="h1contact">CONTACTEZ-NOUS</h1>
      </div>
        <img id="imagecontact" src="asset/image/hero-contact-4cf9fa21.png" alt='' />
        
      </div>
      <!---DEBUT NAVBAR-->
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

      <!---DEBUT CONTACT ET MAP-->
      <div  class="container mt-5">
    <div class="row">
      <div class="col-12">
        <div class="map ">
          <h4 style="color: #ff9900;">Map</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127116.91017168468!2d-4.14959775664058!3d5.355245400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebfed2d15783%3A0x2a036f3f15c3b1ab!2sSi%C3%A8ge%20de%20l&#39;Universit%C3%A9%20Virtuelle%20de%20Cote%20d&#39;Ivoire%20(UVCI)!5e0!3m2!1sfr!2sci!4v1717664695934!5m2!1sfr!2sci"
          width="560" height="278" style="border:0; width: 100%;" 
           allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>  
      </div>

      <div class="col-12">
        <div class="mt-5">
            <h3 style="color: #ff9900;">Envoyer-nous votre message</h3>
            <div>
         
          <form action="" >
            <div class="row">
              <div class="col-md-6 mt-3">
                <input class="form-control" type="text" placeholder="nom">
              </div>
              <div class="col-md-6 mt-3">
                <input class="form-control" type="text" placeholder="prenom">
              </div>
              <div class="col-12 mt-3">
                <input pattern="[0-9]+" class="form-control" type="tel" placeholder="numero de telephone">
              </div>
              <div class="col-12 mt-3">
                <textarea class="form-control" placeholder="probleme" name="" id="" cols="5" rows="5"></textarea>
              </div>
            </div>
            <div class=" mt-3 col-12">
              <input type="submit" class="w-100 btn btn-outline-success p-2" value="Envoyer">
            </div>
          </form></div>
        
        
        </div>
        </div>
      </div>
     
    </div>
  

  <!---FIN CONTACT ET MAP-->



















      
  <!---DEBUT DE FOOTER-->
  @extends('Layout.footer')
  <!--- FIN DE FOOTER-->



























 
  <script src="{{asset('asset/js/jquery.min3.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
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