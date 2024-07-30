<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/CSS/styleprofilcombine_.css') }}">
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
              </div>
    <!--FIN NAV-->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-3">
                    <div class="partieprofil1 card ">
                        <div id="img" class="mt-3">
                            <img src="{{ asset('storage/'.$artisan->photo)}}"
                                alt="">
                        </div>
                        <h1 class="mt-2">{{ $artisan->nom}} {{ $artisan->prenoms}}</h1>

                        <div class="mt-2 text-center ">
                        @if ($artisan->numero_whatsapp)
                            <a id="what" href="https://api.whatsapp.com/send?phone={{ $artisan->numero_whatsapp}}"><i class="fa-brands fa-whatsapp"></i></a>
                            @else
                                <p>Numéro de téléphone non renseigné.</p>
                            @endif

                            <!-- Lien vers le téléphone -->
                            <a id="tel" href="tel:{{ $artisan->phone}}"><i class="fa-solid fa-phone"></i></a>

                        </div>
                    </div>
                    <div class="container card mt-4">
                        <h4 class="mt-3">Metier exercé </h4>
                        <p class=""> <i class="fa-regular fa-user me-2"></i>{{$metier->domaine}}</p>
                        <h4 class="mt-3">Année d'experience </h4>
                        <p class=""> {{ $artisan->annee_experience}}</p>
                    </div>

                </div>
                <div class="col-lg-8 mt-3 ">

                    <div class="partieprofil2 card container">
                        <h4>Service proposée</h4>
                        <p class="m-3">
                        {{ $metier->description}}
                        </p>
                    </div>
                    <div class="card mt-3 container partieprofil2">
                        <h4>Lieu du travail</h4>
                        <div class="m-3">
                            <p>{{ $artisan->ville}}</p>
                            <p>{{ $artisan->commune}}</p>
                            <p>{{ $artisan->quartier}}</p>
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
                        <div class=" col-12">
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active ">
                                  @foreach($commentaires as $commentaire)
                                        <div class="username">
                                          <strong>{{ $commentaire->prenoms }}</strong>
                              
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
                    </div>

                    <div class="partieprofil2 card container mt-3 mb-2">
                        <h4>Création</h4>
                     

                        <div class="container">
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
    <script src="{{ asset('asset/js/jquery.min3.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
   
</body>

</html>