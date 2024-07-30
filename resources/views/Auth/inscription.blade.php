<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
  <div id="containerinscription" >
 
    <div class="">
          <h1 style="color:  green;" class="text-center">INSCRIPTION ARTISANT</h1></div>
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <form class=" container mt-2" method="post" action="{{route ('enregistrement')}}" enctype="multipart/form-data">
    @csrf
      <div class="row">
        <div class="col-md-6">
            <label class="form-label" for="" >Nom</label> 
          <input  class="form-control" name="nom" type="text" pattern="[a-zA-Z]+" required>  
        </div>
        <div class="col-md-6" >
            <label class="form-label" for="">Prénoms</label>
          <input  class="form-control" type="text" name="prenoms" required> 
        </div>
        <div  class="col-md-6 motdepasse">
            <label class="form-label" for="">Mot de passe</label>
          <input  class="form-control" type="password" name="password" required>  
          <span class="toggle-password" onclick="togglePasswordVisibility('password')">
            <i class="fa-regular fa-eye-slash"></i>
          </span>
        </div>
        <div  class="col-md-6 confirmation">
          <label class="form-label" for="">Confirmation mot de passe</label>
          <input  class="form-control" type="password" name="verification_mdp" required>  
          <span class="toggle-password" onclick="togglePasswordVisibility('password')">
            <i class="fa-regular fa-eye-slash"></i>
          </span>
        </div>
        
        <div  class="col-md-6">
            <label class="form-label" for="">Numéro de téléphone</label>
          <input class="form-control" name="phone" type="tel"  required> </div>
          <div  class="col-md-6">
            <label class="form-label" for="">Numéro whatsapp</label>
          <input  class="form-control" type="tel" name="numero_whatsapp" pattern="[0-9]+" required> </div>
          <div  class="col-md-6">
            <label class="form-label" for="">Metier</label>
            <select class="form-select" name="metier_id" id="" required> 
              <option value=""></option>
              @foreach($metiers as $metier)
                <option value="{{$metier->id}}">{{$metier->domaine}}</option>
              @endforeach
             </select>
        </div>
        <div class="col-md-6">
        <label class="form-label" for="">Année d'expérience</label>
        <select class="form-control" name="annee_experience" id="" required>
          <option value=""></option>
          <option value="Moins de 1 ans"> Moins de 1 ans </option>
          <option value="1 à 4 ans"> 1 à 4 ans </option> 
          <option value="5 à 10 ans"> 5 à 10 ans</option>
          <option value=" Plus de 10 ans "> Plus de 10 ans </option>
        </select>
        </div>
    
        <div  class="col-md-6">
            <label class="form-label" for="">Ville</label>
            <input  class="form-control" type="text" name="ville" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label" for="">Commune</label>
            <input  class="form-control" type="text" name="commune" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label" for="">Quartier</label>
            <input class="form-control" type="text" name="quartier"  required>
        </div>
        <div  class="col-md-6" >
          <label class="label" for="">Sexe :</label><br>
          <input type="radio" name="sexe" value="homme">
          <label for="">homme</label>
          <input type="radio" name="sexe" value="femme">
          <label for="">femme</label></div>
        <div  class="col-12">
          <label class="label" for="">selectionnez une photo : </label> 
          <input class="form-control" type="file" name="photo" accept="image/*" required>
      </div>
      <div class=" mt-2">
          <div class="btn btn-outline-danger fw-bold" id="coordonnees" style="cursor: pointer;">Obtenir ma position</div>
      </div>
      <input type="hidden" name="latitude" id="latitude">
      <input type="hidden" name="longitude" id="longitude">
      <div  class="col-md-6 ">
        <input class="form-control s5_input" type="submit"  value="Soumettre">
      </div>
     <div   class="col-md-6 inscription">
    <a id="btninscription" href="{{ route('accueil') }}" class="btn btn-outline fw-bold">Retour</a>
        </div>
        </div>
    </form>
    </div>
  </div>


    <script src="asset/js/EYEsurmotdepasse.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
  
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const position = document.querySelector('#coordonnees');

    position.addEventListener('click', function() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        alert("La géolocalisation n'est pas supportée par ce navigateur.");
      }
    });
    function alertUserLocation(){
        alert("Vous pouvez vous inscrire uniquement lorsque vous êtes sur votre lieu de travail afin de récupérer votre position géographique");
      }
      alertUserLocation();

    function showPosition(position) {
      document.getElementById('latitude').value = position.coords.latitude;
      document.getElementById('longitude').value = position.coords.longitude;
      alert("Coordonnées géographiques récupérées avec succès.");
    }

    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          alert("L'utilisateur a refusé la demande de géolocalisation.");
          break;
        case error.POSITION_UNAVAILABLE:
          alert("Les informations de géolocalisation ne sont pas disponibles.");
          break;
        case error.TIMEOUT:
          alert("La demande de géolocalisation a expiré.");
          break;
        case error.UNKNOWN_ERROR:
          alert("Une erreur inconnue est survenue lors de la géolocalisation.");
          break;
      }
    }
  });
</script>
</body>
</html>