<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/listedartisans.css">
    <title>Liste d'artisans</title>
</head>
<body>
<div class="text-center mt-3">
  <a href="{{ route('accueil') }}">
<button id="user_boutton">Retour à l'acceuil</button></a></div>

<div class="container mt-3">
<div class="row">

@if($artisans->isEmpty())
    <p>Aucun artisan trouvé pour cet metier.</p>
@else
    @foreach($artisans as $info)
        <div class="col-md-4">
        <div class="card mt-3">
            <div class="heads"> <img src="storage/{{$info->photo}}" alt=""></div>
            
            <div class="bodys">
                <div class="info text-center"><h2>{{ $info->nom}} {{ $info->prenoms }} </h2>
            <h4>{{ $info->commune}}</h4> </div>
        
        <div class="text-center mt-2   ">
        <a class="text-success fw-bold " href="{{route ('profil_recherche',$info->id) }}"> Savoir plus</a></div>
        </div>
    </div></div>
    @endforeach
@endif
            
</div>
</div>


    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>