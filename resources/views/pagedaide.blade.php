<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="text-center mt-3">
    <a href="{{ route('accueil') }}">
      <button class=" btn btn-outline-success">Retour à l'acceuil</button></a>
  </div>

    <!---DEBUT FAQ foire aux questions-->
  <div class="container w-80">
    <h2 style="color: #ff9900;" class="text-center mt-5">FOIRE AUX QUESTIONS</h2>
    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Qu'est-ce que Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Artisanat Express est une plateforme en ligne qui connecte des artisans locaux
             avec des clients cherchant à bénéficier de leurs services.
          </div>
        </div>
      </div>
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Comment fonctionne Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">L'application permet aux artisans de s'inscrire, de créer un profil, de publie
             des photos de leurs créations, de définir leurs prix et de recevoir des commandes directement via la
              plateforme. Les clients peuvent demander un service et recevoir une liste d'artisans à proximité pouvant 
              répondre à leurs besoins. Ils peuvent parcourir les profils,
             communiquer avec les artisans et choisir celui qui leur convient.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Quels sont vos différents domaines d'intervention sur Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Nous intervenons dans plus de 18 métiers, tels que menuisier, le transport,  
            la maçonnerie, la mécanique, la bijouterie etc.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Comment puis-je demander un service sur Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Vous allez sur la section "Demande de service", remplir le formulaire en fonction 
            de vos besoins et soumettre votre demande. 
            Une liste d'artisans vous sera retournée et vous pourrez choisir celui qui vous convient.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Artisanat Express est-il sécurisé ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Oui, la sécurité des données est une priorité pour nous. Nous protégeons 
            les informations personnelles conformément aux normes de sécurité en vigueur.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Comment puis-je devenir un artisan sur Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Si vous êtes artisan et souhaitez vendre vos créations sur notre plateforme pour attirer plus de clients et accroître votre visibilité, veuillez remplir le formulaire
             d'inscription sur notre site web pour créer votre profil. Nous vous contacterons ensuite pour plus de détails.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Quelle est votre zone de couverture ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Nos artisans interviennent partout en Côte d'Ivoire.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Quelles sont les mesures prises par Artisanat Express pour soutenir les artisans locaux ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Artisanat Express valorise le travail des artisans locaux en leur offrant une
             plateforme pour promouvoir leurs créations au niveau local et au-delà, renforçant ainsi les économies 
             locales et promouvant la diversité culturelle à travers les produits artisanaux.

          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Pourrai-je modifier mes informations après être devenu un artisan d'Artisanat Express ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Oui, pour toute modification d'informations, vous devez accéder à votre profil
             utilisateur et y apporter les modifications nécessaires.

          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Comment fonctionne le packs publicitaires?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">le packs publicitaires vous octroie divers avantages tels que 
            la visibilité accrue de votre profil par les clients et la sponsorisation de votre profil
             sur nos différents réseaux sociaux. Ces avantages sont valables pour une durée définie, 
             et vous recevrez un rappel par message 3 jours avant la fin de votre abonnement.

          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Y a-t-il un système d'évaluation ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Oui, Artisanat Express dispose d'un système d'évaluation permettant aux utilisateurs de
             noter et de laisser un avis sur les artisans avec lesquels ils ont interagi.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
             Artisanat Express est-il disponible dans plusieurs langues ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Actuellement, Artisanat Express est disponible en français. 
            Nous envisageons d'ajouter d'autres langues à l'avenir pour mieux servir nos utilisateurs 
            à travers le monde.

          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Comment puis-je contacter le support client d'Artisanat Express en cas de problème ?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Pour toute question ou problème, vous pouvez contacter notre équipe de support 
            client via l'application elle-même dans l'onglet contact ou par e-mail à support@artisanatexpress.com
            . Nous sommes là pour vous
             aider à tout moment.
          </div>
        </div>
      </div>
    </div>
 <!---FIN FAQ foire aux questions-->


    <h2 style="color: #ff9900;" class="text-center mt-5">GUIDES D'UTILISATION</h2>
    <div class="mb-3">
      <h1>Télécharger le guide</h1>
      <p>Cliquer sur le lien ci-dessous pour Télécharger le fichier</p>
      <a class="btn btn-outline-success" href="{{ route('guide.telechagement') }}" >Télécharger le fichier PDF</a>
    </div>
  </div>

 



    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>