<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/CSS/STYLE_combinéACCEUIL.css')}}">
    <title>differentservice</title>
</head>
<body>
    <div>
        <img class="mb-5 w-100" src="{{asset('asset/image/')}}" alt=''/>
    </div>
    <div id="infoservice" class="container ">
    <h1 class="mt-5  fw-bold">{{ $details->domaine }}</h1>
    <section class="mt-3  p-5 fw-bold fs-4">
        <p>{{ $details->description }}</p>
        <a href="{{route('accueil')}}" class="btn btn-danger fw-bold mt-3">Retour</a>
    </section>
    </div>
        <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html> 