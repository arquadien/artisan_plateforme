<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/styleprofilcombine_.css">
    <title>Document</title>
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
                              0
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
                <img src="storage\{{ Auth::user()->photo }}"
                    alt="" class="user-img" onclick="toggleMenu()">

                <div class="menu-wrap" id="subMenu">
                    <div class="sub-menu ">
                        <div class="user-2">
                            <img src="storage\{{ Auth::user()->photo }}"
                                class="user-imgs" alt="">
                            <h3>{{Auth::user()->nom}}</h3>
                        </div>
                        <hr>
                        <a href="{{ route('profil') }}" class="user-icone">
                            <i class="fa-solid fa-user"></i>
                            <p>Mon profil</p>
                            <span>></span>
                        </a>
                        </a>
                        <a href="#" class="user-icone">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <form action="{{route('logout')}}" method="post">
                                @method("delete")
                                @csrf
                                <button style="border: none; background: none;">se déconnecter</button>
                              </form>
                            <span>></span>
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
                <a class="nav-link " href="{{ route('abonnement')}}">Mon abonnements</a>
            </li>
        </ul>
    </nav>

    
<div class="container-fluid" >
    <div class="row">
@foreach($articles as $article)
    <div  class="col-md-4 mt-4">
        <div class="card">
    <h3>titre de l'article</h3>
    <p> {{$article->presentation}}</p>
    <img class="mb-4" src="storage/{{$article->photos}}" alt="">
    <div id="monElement">
    <button class="btn btn-outline-primary" id="modifier">Modifier</button>
    <button class="btn btn-outline-danger" id="supprimer">supprimer</button>
    </div>
    </div>
    
    </div>
@endforeach


</div>
</div>






<script src="asset/js/navbar.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>