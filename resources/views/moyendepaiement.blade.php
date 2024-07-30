<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('asset/CSS/bootstrap.min.css') }}">
  <title>Document</title>
</head>

<body>
<div class="container">
    <input class="form-control  mt-2" type="text" placeholder="Nom prénoms">
        <form action="">
            <div class="row mt-3">
            <h3 class="mb-3">Moyen de paiement</h3>
       <div >
        <input class="form-control fw-bold" type="text" placeholder="MONEY OU WAVE" disabled>
       </div>
       <div class="col-md-6 mt-2">
        <label for="form-label">Numéro de téléphone</label>
        <input class="form-control" type="tel" pattern="[0-9]+" required>
       </div>
       <div class="col-md-6 mt-2">
        <label for="form-label">Moyen de paiement</label>
        <select  class="form-select"  name="" id="" required>
            <option value=""></option>
            <option value="">Orange Money</option>
            <option value="">MTN Money</option>
            <option value="">Moov Money</option>
            <option value="">WAVE</option>
        </select>
       </div>
       <div class=" mt-2">
        <label for="form-label">Nom inscrit sur votre compte</label>
        <input class="form-control" type="text" pattern="[a-z A-Z]+" required>
       </div>
       <div class=" mt-2">
        <label for="form-label">pays</label>
        <select  class="form-select"  name="" id="" required>
            <option value=""></option>
            <option value="">Côte d'ivoire</option>
            <option value="">Sénégal</option>
            <option value="">Ghana</option>
           
        </select>
    </div>
   
        <input class="btn btn-outline-success col-md-12 mt-2 " type="submit" value="S'abonner">
        <a href="" class="btn btn-outline-link col-md-12 mt-2 fw-bold" >Annuler</a>
   
    
    </div>
      
        </form>
   
</div>
    



<script src="{{ asset('asset/js/navbar.js') }}"></script>
<script src="{{ asset('asset/js/jquery.min3.js') }}"></script>
  <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>