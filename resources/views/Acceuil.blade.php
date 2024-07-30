<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{(' asset/CSS/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{('asset/CSS/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{('asset/CSS/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{('asset/CSS/STYLE_combinéACCEUIL.css')}}">
  <title>Accueil</title>
</head>
<body>
  </div class="img-container">
  
  <div>
      <h1 class="h1acceuil fw-bold">ARTISANEXPRESS</h1>
      <form action="{{route('recherche')}}" method="post">
        @csrf
        <select class="form-control acceuil w-25"  aria-label="Default select example" name="metier" required>
        <option value="">rechercher un service</option>
          @foreach($searchs as $search)
              <option value="{{$search->id}}">{{$search->domaine}}</option>
          @endforeach
        </select>
        <input class=" btn btn-outline-success" value="recherche" type="submit" id="btnacceuil">
      </form>
     
    </div>
    <img id="imageaceuil"  class="w-100 " src="{{asset('asset/image/acceuilImage.jpg')}}" alt='' />
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
                  <img src="storage\{{ Auth::user()->photo }}" class="user-imgs" alt="">
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

  <!---DEBUT DE CATEGORIE DES SERVICES-->
  <h1 style="color: #ff9900;" id="entetecategories" class="text-center mt-5 mb-5"> DECOUVREZ NOS SERVICES </h1>
  <div class="categories">
    <div class="container ">
      <div class="row">

      @foreach($metiers as $metier)
        <div class="col-md-3 mt-3">
          <a href="{{route('infosurnosservice', $metier->id)}}">
            <div class="card ima">
              <div class="mage">
                <img class="imgs" src="storage/{{$metier->image}}" alt="">
              </div>
              <h5>{{$metier->domaine}}</h5>
            </div>
          </a>
        </div>
      @endforeach

      </div>
      <h3 class=" mt-3  text-center"> <a class="btn btn-outline-success fw-bold" href="{{route('plusService')}}"> VOIR PLUS
          ...</a></h3>
    </div>
  </div>
  <!---FIN DE CATEGORIE DES SERVICES-->

   <!---DEBUT PRESENTATION DE LA PLATE FORME-->

   <div class="container mt-3 p-5">
    <h2 class="text-center" style="color: #ff9900;">PRESENTATION DE LA PLATEFORME</h2>
    <div class="row  mt-3" id="box" >
      <h3 class=" mb-3"> Pourquoi choisir ArtisanExpress ?</h3>
      <div class="box2 col-md-5">
        <p> <strong>Sélection Rigoureuse d'Artisans :</strong>Nous travaillons uniquement avec des artisans qualifiés et
          expérimentés, pour vous garantir un service de qualité.</p>
        <p> <strong>Facilité de Réservation en Ligne : </strong>Réservez vos services artisanaux en toute simplicité, à
          tout moment et depuis n'importe où.</p>
        <p> <strong> Personnalisation Avancée :</strong>Trouvez l'artisan idéal pour votre projet en filtrant par
          spécialité, disponibilité et tarifs.</p>
        <p> <strong>Avis Clients Authentiques :</strong> Consultez les évaluations et les témoignages de nos clients
          précédents pour faire le meilleur choix.</p>


      </div>
      <div class="box1 col-md-7"> 
      <video id="plateformevideo" controls>
      <source src="{{asset('asset/video/presentation.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
      </video>
     
</div>
  </div>
  <!---FIN PRESENTATION de la PLATE FORME-->



  <!---DEBUT COMMENT CA MARCHE-->
  <div class=" mt-5">
    <div class="container">
      <div class="haut text-center">
        <h2 style="color: #ff9900; ">COMMENT ÇA MARCHE ?</h2>
        <p class="mt-3">Demandez un service, recevez la liste des artisans disponibles, contactez celui de votre choix
          et profitez d'un service sur mesure.</p>
      </div>
      <div class="row">
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images (7).jfif" alt="">
            <div>
              <h5>Decrivez votre problème</h5>
              <p>Indiquez vos besoins et vos préférences dans notre formulaire de demande et
                choisissez l'heure et la date qui vous conviennent pour les travaux.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images.png" alt="">
            <div>
              <h5>Choix d'artisans</h5>
              <p> Une fois votre réservation effectuée, nous vous enverrons une liste d'artisans disponibles à
                proximité. Vous pourrez alors contacter l'artisan de votre choix directement pour finaliser les détails
                de votre projet.
                Une fois votre accord avec l'artisan confirmé, préparez-vous à accueillir sa venue.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images (8).jfif" alt="">
            <div>
              <h5>Modalités de paiement et d'évaluation client</h5>
              <p>Une fois les travaux terminés, vous réglez votre facture soit en espèces, soit par mobile money,
                en fonction de l'artisan. Enfin, vous pouvez évaluer l'artisant grâce à un lien que nous vous enverrons.
              </p>
            </div>
          </div>
        </div>
      </div>
    
    </div>

  </div>
  <!---FIN COMMENT CA MARCHE-->



   <!---DEBUT FAQ foire aux questions-->
   <div class="container w-80">
    <h2 style="color: #ff9900;" class="text-center mt-5">FOIRE AUX QUESTIONS</h2>
    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Qu'est-ce que Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Artisanat Express est une plateforme en ligne qui connecte des artisans locaux
             avec des clients cherchant à bénéficier de leurs services.
          </div>
        </div>
      </div>
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Comment fonctionne Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">L'application permet aux artisans de s'inscrire, de créer un profil, de publie
             des photos de leurs créations, de définir leurs prix et de recevoir des commandes directement via la
              plateforme. Les clients peuvent demander un service et recevoir une liste d'artisans à proximité pouvant 
              répondre à leurs besoins. Ils peuvent parcourir les profils,
             communiquer avec les artisans et choisir celui qui leur convient.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Quels sont vos différents domaines d'intervention sur Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Nous intervenons dans plus de 18 métiers, tels que menuisier, le transport,  
            la maçonnerie, la mécanique, la bijouterie etc.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Comment puis-je demander un service sur Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Vous allez sur la section "Demande de service", remplir le formulaire en fonction 
            de vos besoins et soumettre votre demande. 
            Une liste d'artisans vous sera retournée et vous pourrez choisir celui qui vous convient.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Artisanat Express est-il sécurisé ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Oui, la sécurité des données est une priorité pour nous. Nous protégeons 
            les informations personnelles conformément aux normes de sécurité en vigueur.
          </div>
        </div>
      </div>
      </div>
    </div>
    <h3 class=" mt-3  text-center"> <a class="btn btn-outline-success fw-bold" href="{{route('plusdaide')}} "> VOIR PLUS
    ...</a></h3>
  </div>

  <!---FIN FAQ foire aux questions-->

  <!---DEBUT AVIS TEMOIGNAGE-->

  <h2 style="color: #ff9900;" class="text-center  mt-5">TEMOIGNAGE CLIENT</h2>
  <div id="avis" class="mt-3">
    <div class="owl-carousel">
      
        @foreach($commentaires as $commentaire)
        <div class="item">
        <div class="box-top">
          <div class="username">
            <strong>{{ $commentaire->prenoms}}</strong>

          </div>
          <div class="etoile">
            
          @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $commentaire->note)
              <i class="fa-solid fa-star"></i> <!-- Étoile pleine -->
            @else
              <i class="fa-regular fa-star"></i> <!-- Étoile vide -->
            @endif
          @endfor
          </div>
          <p>{{ $commentaire->commantaire}}</p>
        </div>
      </div>
      @endforeach
      </div>

    </div>

  </div>



  <!---FIN DE TEMOIGNAGES-->







  <!---DEBUT DE FOOTER-->
    @extends('Layout.footer')
  <!--- FIN DE FOOTER-->


  
    <script src="{{asset('asset/js/jquery.min3.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
 
  <script>
   $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000, // Délai plus long pour une meilleure expérience utilisateur
    autoplayHoverPause: true,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
});


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
        