<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>Connexion</title>
</head>
<body><div class="text-center mt-3">
  <a href="{{ route('accueil') }}">
<button id="user_boutton">Retour à l'acceuil</button></a></div>
  
  <div class="container" id="s6_contain">
    <h2 style="text-align : center;">Se connecter</h2><hr>
    @if(Session::get('erreur'))
      <b style="color: red; text-align : center;">{{ Session::get('erreur') }}</b>
    @endif

    @if(Session::get('msg'))
      <div class="alert alert-success" style="color: green; text-align : center;  font-size : 18 px;"><b>{{ Session::get('msg') }}</b></div>
    @endif
    
<form class="container" action="{{route('connexion')}}" method="post">
  @csrf
    <label for="" class="form-label ">Numero de telephone</label>
   <input class="form-control" type="tel"  placeholder="phone" name="phone" required value="{{old('numero_de_telephone')}}">
   <div class="s6_motdepasse">
   <label for="" class="form-label mt-3">Mot de passe</label>
   <input class="form-control" type="password" name="password" placeholder="mot de passe" required>
   <i class="fa-regular fa-eye-slash"></i>
</div>
   <input type="checkbox">
   <label class="mt-2" for=""> Souviens toi de moi</label> <br>
   <input class="mt-4 s6_submit  text-white" type="submit" value="se connecter">
   <div class="s6_lien mt-2">
   <a  href="#" class="s6_monlien">Mot de passe oublier ?</a></div>
</form>
  </div>










  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script>
    //PARTIE CONNEXION
let s6_input = document.querySelector('.s6_motdepasse input');
let icones = document.querySelector('.s6_motdepasse i');
icones.onclick = function() {
  if (s6_input.type === "password") {
    s6_input.type = "text";
    icones.classList.add('active');
   
  } else {
    s6_input.type = "password";
    icones.classList.remove('active');
  }
};
  </script>
</body>
</html>