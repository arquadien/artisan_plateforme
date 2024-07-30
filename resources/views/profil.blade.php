<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/styleprofilcombine_.css">
    <title>Profil artisan</title>
</head>

<body>
    <!--DEBUT NAV-->
    <div id="nav">

        <nav class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('accueil') }}"><u>Retour à l'acceuil </u> </a>
                </li>
                <li class="nav-item">

                    <a   data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"
                        class="nav-link position-relative me-2" href="#"><i class="fa-regular fa-bell me-2"></i>

                            <span class="position-absolute  translate-middle badge rounded-pill bg-danger">
                              
                              <span class="visually-hidden">unread messages</span>
                            </span>
                         </a>
                    <div class="offcanvas offcanvas-top container w-50" tabindex="-1" id="offcanvasTop"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title " id="offcanvasTopLabel">Notifications</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <p>bonjour</p>
                        </div>

                    </div>

                </li>
                <img src="{{ asset('storage/' . Auth::user()->photo) }}"
                    alt="" class="user-img" onclick="toggleMenu()">
                <div class="menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-2">
                            <img src="storage\{{ Auth::user()->photo }}"
                                class="user-imgs" alt="">
                            <h3>{{Auth::user()->nom}}</h3>
                        </div>
                        <hr>
                        <a href="{{ route('profil') }}" class="user-icone">
                            <i class="fa-solid fa-user"></i>
                            <p>Mon profil</p>
                            
                        </a>
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
            </ul>
        </nav>
    </div>
    <!--FIN NAV-->

    <nav class="user">
        <ul class="nav justify-content-center ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('profil')}}">Tableau de bord</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('affichage_article')}}">Article publier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('abonnement')}}">Pack publiciatire</a>
            </li>
        </ul>
    </nav>
    @if(Session::get('msg'))
      <div class="alert alert-success" style="color: green; text-align : center;  font-size : 18 px;"><b>{{ Session::get('msg') }}</b></div>
    @endif
    @if(Session::get('msg_echec'))
      <div class="alert alert-danger" style="color: red; text-align : center; font-size : 18 px;"><b>{{ Session::get('msg_echec') }}</b></div>
    @endif

    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-3">
                    <div class="partieprofil1 card ">
                        <h4 class="text-center">Information personnelles </h4>
                        <span id="iconecrayon"> <i class="fa-solid fa-pencil" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"></i></span>
                        <!-- MODAL PARTIE MODIFIER LE PROFIL -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Information personnelles
                                        </h1>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <p class="container">Ajoutez vos informations personnelles telles que vous souhaitez
                                        qu’elles apparaissent dans votre profil.</p>
                                    <div class="modal-body">
                                        <h6>Photo de profil</h6>
                                        <div id="img" class="mt-3">
                                            <img src="storage\{{ Auth::user()->photo }}"
                                                alt="">
                                        </div>
                                        <form class="information" action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="mt-3">
                                              <label class="btn btn-primary " for="">
                                                  Changer la photo
                                              <input class="choisirunephoto" type="file" name="photo" accept="image/*" value="storage\{{ Auth::user()->photo }}"></label>
                                          </div>
                                            <div class="row">

                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Nom</label>
                                                    <input type="text" name="nom" value="{{ Auth::user()->nom}}">
                                                </div>

                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Prénoms</label>
                                                    <input type="text" name="prenoms" value="{{ Auth::user()->prenoms}}">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Numéro de téléphone</label>
                                                    <input type="text" name="phone" pattern="[0-9]{10}" value="0{{Auth::user()->phone}}">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Numéro whatsapp</label>
                                                    <input type="text" name="numero_whatsapp" pattern="[0-9]{10}" value="0{{Auth::user()->numero_whatsapp}}">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Ville</label>
                                                    <input type="text" name="ville" value="{{ Auth::user()->ville}}">
                                                </div>

                                                <div class="col-md-6 mt-2">
                                                    <label class="form-label" for="">Commune</label>
                                                    <input type="text" name="commune" value="{{ Auth::user()->commune}}">
                                                </div>
                                                <div class="col-md-6 mt-2"> 
                                                    <label class="form-label" for="">Quartier</label>
                                                    <input type="text" name="quartier" value="{{ Auth::user()->quartier}}">
                                                </div>
                                            </div>
                                          <div class="mt-4">
                                              <h4>Modifier votre mot de passe</h4>

                                              <div class="mt-3">
                                                  <label class="form-label">Mot de passe actuel</label>
                                                  <input class="form-control" name="last_password" type="password">
                                              </div>
                                              <div>
                                                  <label class="form-label">Nouveau mot de passe</label>
                                                  <input class="form-control" name="new_password" type="password">
                                              </div>
                                              <div>
                                                  <label class="form-label">Répété le nouveau mot de passe</label>
                                                  <input class="form-control" name="confirmation_mdp" type="password">
                                              </div>

                                          </div>
                                        
                                          </div>
                                          <div class="modal-footer">
                                              <input type="submit"class="btn btn-primary" value="Sauvegarder">
                                          </div>
                                          </form>
                                </div>
                            </div>
                        </div>



                        <div id="img" class="mt-3">
                            <img src="storage/{{ Auth::user()->photo}}"
                                alt="">
                        </div>
                        <h1 class="mt-2">{{ Auth::user()->nom}} {{ Auth::user()->prenoms}}</h1>

                        <div class="mt-2 text-center ">
                            <!-- Lien vers WhatsApp -->
                            @if (auth()->user()->numero_whatsapp)
                            <a id="what" href="https://api.whatsapp.com/send?phone={{ Auth::user()->numero_whatsapp}}"><i class="fa-brands fa-whatsapp"></i></a>
                            @else
                                <p>Numéro de téléphone non renseigné.</p>
                            @endif

                            <!-- Lien vers le téléphone -->
                            <a id="tel" href="tel:{{ Auth::user()->phone}}"><i class="fa-solid fa-phone"></i></a>


                        </div>
                    </div>
                    <div class="container card mt-4">
                        <h4 class="mt-3">Metier exercé </h4>
                        <p class=""> <i class="fa-regular fa-user me-2"></i>{{$metier->domaine}}</p>
                        <h4 class="mt-3">Année d'experience </h4>
                        <p class=""> {{ Auth::user()->annee_experience}}</p>
                    </div>

                </div>
                <div class="col-lg-8 mt-3 ">

                    <div class="partieprofil2 card container">
                        <h4>{{$metier->domaine}}</h4>
                        <p class="m-3">
                        {{ $metier->description}}
                        </p>
                    </div>
                    <div class="card mt-3 container partieprofil2">
                        <h4>Lieu du travail</h4>
                        <div class="m-3">
                            <p><b>Ville : </b> {{ Auth::user()->ville}}</p>
                            <p><b>Commune : </b>{{ Auth::user()->commune}}</p>
                            <p><b>Quartier : </b>{{ Auth::user()->quartier}}</p>
                        </div>
                    </div>
                    <div class="card mt-3 container partieprofil2">
                        <h4>Evaluation</h4>
                        <div class="etoile m-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="ms-4"><a style="text-decoration: none;"  href="">( {{ $compteur }} avis verifier)</a></span>
                        </div> 

                        <h4 class="mt-2">Temoignage</h4>
                        <div class="col-12 container mt-3">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach($commentaires as $index => $commentaire)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
          <div class="box-top">
            <div class="username">
              <strong>{{ $commentaire->prenoms }}</strong>
            </div>
            <div class="etoile">
            <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-regular fa-star"></i>
            </div>
            <p>{{ $commentaire->commantaire }}</p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</div></div>

                    <div class="partieprofil2 card container mt-3 mb-2">
                        <h4>Création</h4>
                        <a id="publication" href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fa-solid fa-plus "></i> PUBLIER UN ARTICLE</a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Publication</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <form action="{{route('creer_un_article')}}" method="post" enctype="multipart/form-data">
                                              @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="title">prix de l'article</label>
                                                    <input class="form-control" name="prix" type="text" id="title" name="title"
                                                        required>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                <div class="form-group">
                                                    <label class="form-label" for="content">Presentation de
                                                        l'article:</label>
                                                    <textarea class="form-control" id="content" name="presentation"
                                                        required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="photos">Photos de l'article
                                                        (obligatoire, sélectionnez plusieurs):</label>
                                                    <input class="form-control" type="file" id="photos" name="photos"
                                                        accept="image/*" multiple required>
                                                </div>

                                                <div class="form-group mt-3 modal-footer">
                                                    <button class="form-control btn btn-outline-success"
                                                        type="submit">Publier</button>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--FIN MODAL-->


                        <div class="row">
                            <div  class="col-md-6 mt-4 h-50">
                            @foreach($articles as $article)
                              @if($article->id % 2 == 1)
                                <div class="card p-3 ">
                                <h3>prix: {{$article->prix}} FCFA</h3>
                                <p>{{$article->presentation}}</p>
                                <img class="mb-4 " style="width: 300px;" src="storage/{{$article->photos}}" alt="">
                                </div>
                              @endif
                            @endforeach</div>
                            <div  class="col-md-6 mt-4 h-50">
                            @foreach($articles as $article)
                              @if($article->id % 2 == 0)
                                <div class="card p-3 ">
                                <h3>prix: {{$article->prix}} FCFA</h3>
                                <p>{{$article->presentation}}</p>
                                <img class="mb-4 " style="width: 300px;" src="storage/{{$article->photos}}" alt="">
                                </div>
                              @endif
                            @endforeach</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>






    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/jquery.min3.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>