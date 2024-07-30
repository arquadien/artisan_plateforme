
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