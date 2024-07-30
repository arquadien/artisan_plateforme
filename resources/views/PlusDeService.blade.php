<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>Nos different services</title>
</head>
<body>
 <div class="container-fluid">
  <div id="boutton" class="text-center mt-5">
    <a href="{{route('accueil')}}">
  <button id="user_boutton">Retour à l'acceuil</button></a></div>

    <h1 style="color: #ff9900;" id="entetecategories" class="text-center mt-4 mb-5"> DECOUVREZ NOS SERVICES   </h1>
    <div class="categories">
      <div class="container ">
        <div class="row">
          @foreach ($metiers as $metier)
          <div class="col-md-3 mt-3">
            <a href="{{route('infosurnosservice', $metier->id) }}">
              <div class="card ima">
                <div class="mage">
                  <img class="imgs" src="storage/{{$metier->image}}" alt="">
                </div>
                <h5>{{ $metier->domaine }}</h5>
              </div>
            </a>
          </div>
          @endforeach
        </div>
  
 </div>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>