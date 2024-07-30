<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/CSS/styleprofilcombine_.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/CSS/temoignage.css') }}">
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
                        <h4>{{$metier->domaine}}</h4>
                        <p class="m-3">
                        {{ $metier->description}}
                        </p>
                    </div>
                    <div class="card mt-3 container partieprofil2">
                        <h4>Lieu du travail</h4>
                        <div class="m-3">
                            <p> <b>Ville : </b>  {{ $artisan->ville}}</p>
                            <p> <b>Commune : </b>{{ $artisan->commune}}</p>
                            <p><b>Quartier : </b>{{ $artisan->quartier}}</p>
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
                          <div class="mt-2 col-12">
                            <a href="temoignage.html" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus"></i> DEPOSER LE VOTRE</a>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">  Evaluation du service </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{route('avis')}}" method="post">
            @csrf
            <div class="container">
               <div id="etoile">
                  <h4 style="margin-bottom: -10px;">Sélectionner les etoiles pour evaluer le service</h4><hr>
                  <div class="star-etoile" >
                    <input  type="radio" name="note" value="1" id="rate-5">
                    <label for="rate-5" class="fas fa-star"></label>
                    <input  type="radio" name="note" value="2" id="rate-4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input  type="radio" name="note" value="3" id="rate-3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input  type="radio" name="note" value="4" id="rate-2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input  type="radio" name="note" value="5" id="rate-1">
                    <label for="rate-1" class="fas fa-star"></label>
                  </div>
                </div>

              <div class="row">
        <input type="hidden" name="artisan_id" value="{{ $artisan->id}}">
          <div>
          <h5 style="margin-top: 40px;">LAISSEZ UN COMMENTAIRE</h5>
          <hr style="margin-bottom: -5px;"></div>
          <div id="form" class="col-md-12">
            <label class="form-label" for="">Titre du commentaire</label> <br>
            <input type="text" name="appreciation" id="" placeholder="j'aime ça/j'aime pas" required>
          </div>
          <div  id="form" class="col-md-12">
            <label class="form-label" for="">Prenom</label> <br>
            <input type="text" name="prenoms" placeholder="votre prenom" required>
          </div>
          <div id="com"  class="col-12 mt-5">
            <label class="form-label" for="">Commentaire détaillé</label>
            <textarea placeholder="Dite nous plus sur ce service"  name="commentaire" id="textarea" cols="30" rows="10"></textarea>
          </div>
          <div class="col-12 mt-4">
            <input class="w-100 btn btn-outline-warning" type="submit" value="ENREGISTRER">
          </div>
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
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