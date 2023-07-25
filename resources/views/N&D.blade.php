<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Naissances et décès</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/nd.css') }}">
  </head>
  <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <div class="spanfa">
            <span class="fas fa-bars fa-2x"></span>
          </div>
        </button>
        <a class="navbar-brand" href="/"><img src="/images/ehulogo-petit2.png" alt="EHULOGO"></a>
        <a class="main-header__nav-item">
          <div class="switch">
            <input class="switch__input" type="checkbox" id="themeSwitch">
            <label aria-hidden="true" class="switch__label" for="themeSwitch">On</label>
            <div aria-hidden="true" class="switch__marker"></div>
          </div>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
          <ul class="navbar-nav m-auto">
            <li class="nav-item"><a class="nav-link" href="/"style="font-weight: 600;line-height: normal;font-size: 16px;">Accueil</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/droitsdupatient" id="navbarDropdown" role="button" data-toggle="dropdown"  style="font-weight: 600;line-height: normal;font-size: 16px;"style>Patient</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/droits"><strong>Vos droits</strong></a>
                <a class="dropdown-item" href="/arrivee"><strong>Votre arrivée</strong></a>
                <a class="dropdown-item" href="/sejour"><strong>Votre séjour</strong></a>
                <a class="dropdown-item" href="/sortie"><strong>Votre sortie</strong></a>
                <a class="dropdown-item" href="/consultation"><strong>Votre consultation</strong></a>
                <a class="dropdown-item" href="/don"><strong>Don et prélèvements</strong></a>
                <a class="dropdown-item" href="/N&D"><strong>Naissances et décès</strong></a>
                <a class="dropdown-item" href="/visiteurs"><strong>Visiteurs</strong></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/offredesoins" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="font-weight: 600;line-height: normal;font-size: 16px;">Offre de soins</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/medecine"><strong>Médecine</strong></a>
                <a class="dropdown-item" href="/chirurgie"><strong>Chirurgie</strong></a>
                <a class="dropdown-item" href="/maternite"><strong>Maternité</strong></a>
                <a class="dropdown-item" href="/urgences"><strong>Urgences</strong></a>
                <a class="dropdown-item" href="/radiologie"><strong>Radiologie</strong></a>
                <a class="dropdown-item" href="/analyses"><strong>Analyses</strong></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/presentation" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="font-weight: 600;line-height: normal;font-size: 16px;">À propos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/presentation"><strong>Présentation de l'EHU</strong></a>
                <a class="dropdown-item" href="/M&V"><strong>Missions et valeurs</strong></a>
                <a class="dropdown-item" href="/M&D&G"><strong>Mot du directeur général</strong></a>
                <a class="dropdown-item" href="/organigramme"><strong>Organigramme de l'EHU</strong></a>
                <a class="dropdown-item" href="/informations"><strong>Informations pratiques</strong></a>
                <a class="dropdown-item" href="/qos"><strong>Qualité à l'EHU</strong></a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="/map"style="font-weight: 600;line-height: normal;font-size: 16px;">Plan d'accès</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact"style="font-weight: 600;line-height: normal;font-size: 16px;">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/EHU/rendez-vous/"style="font-weight: 600;line-height: normal;font-size: 16px;">rendez-vous</a></li>
          </div>
        </div>
      </nav>
      <section class="jumbotron text-center">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
          <p class="lead text-muted mb-0">
            <img src="/images/nd.png" alt="droitspatient">
          </p>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <table class="table">
              <thred>
                <tr>
                  <th scope="row">
                    <a href='/droits' class="colorcollum">Vos droits</th>
                  </tr>
                  <tr>
                    <th scope="row">
                      <a href='/arrivee' class="colorcollum">Votre arrivée</th>
                    </tr>
                    <tr>
                      <th scope="row">
                        <a href='/sejour' class="colorcollum">Votre séjour</th>
                      </tr>
                      <tr>
                        <th scope="row">
                          <a href='/sortie' class="colorcollum">Votre sortie</th>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href='/consultation' class="colorcollum">Votre consultation</th>
                          </tr>
                          <tr>
                            <th scope="row">
                              <a href='/don' class="colorcollum">Don et prélèvements</th>
                            </tr>
                            <tr>
                              <th scope="row"style="background-color: red;">
                                <a href='/N&D' class="colorcollum"> Naissances et décès</th>
                              </tr>
                              <tr>
                                <th scope="row">
                                  <a href='/visiteurs' class="colorcollum">Visiteurs</th>
                                </tr>
                              </thead>
                            </table>
                            <div></div>
                          </div>
                          <div class="col-sm-8">
                            <h2><strong>Dispositions relatives aux naissances </strong></h2>
                            <h4>1- Déclaration de naissance</h4>
                            <p>
                              La déclaration de la naissance d’enfants au sein de l’hôpital est effectuée auprès de l’officier d’Etat-civil dans les cinq jours suivant l’accouchement par le père ou la mère ou par défaut par les médecins, sages-femmes ou toute autre personne ayant assisté à l’accouchement.
                            </p>
                            <p>
                              Le double de la déclaration est tenu par les services du bureau des entrées sur un registre des naissances, côté et paraphé.
                            </p>
                            <h4>2- Déclarations spécifiques aux enfants décédés dans la période périnatale</h4>
                            <p>
                              Les conditions de déclaration à l'état-civil des enfants mort-nés pour une grossesse d’au moins 24 semaines d’aménorrhée (SA):
                            </p>
                            <ul>
                              <li>Quand un enfant est né mort, l'officier d'état-civil dressera un acte d'enfant sans vie au vu d’un certificat établi par le médecin.</li>
                            </ul>
                            <h4>3- Conditions de déclaration à l'état civil des enfants mort-nés, né mort après une gestation de moins de 24 SA :</h4>
                            <p>
                              Aucun acte n’est délivré, il s’agit alors d’un fœtus.
                            </p>
                            <h4>4- Conditions de déclaration de naissance des enfants nés vivants et décédés avant la déclaration de leur naissance à l'état civil.</h4>
                            <p>
                              - Un acte de naissance doit en effet être dressé par l'officier d'état civil au vu d'un certificat médical attestant que l'enfant est « né vivant et viable ». Le certificat d'enfant né vivant et viable devrait être établi pour : « Tout enfant né vivant à partir de 24 semaines d'aménorrhée ou pesant au moins 500 grammes à la naissance, même si l'enfant n'a vécu que quelques minutes, même s'il souffre de malformation ou de pathologie incompatibles avec la vie » (la viabilité n'étant entendue qu'en terme de durée de gestation et non d'aptitude à vivre).
                            </p>
                            <h2><strong>Dispositions relatives aux décès</strong></h2>
                            <p>
                              - En cas de décès à l’EHUO, le directeur chargé de l’Etat-civil doit aviser, dans les 24 heures, l’officier de l’état civil.
                            </p>
                            <p>
                              - Un registre de déclaration de décès est tenu au sein du bureau des entrées de l’EHUO.
                            </p>
                            <h4>1- Attitude à l’approche du décès</h4>
                            <p>
                              - La famille ou la personne inscrite «  à prévenir » sont prévenues lorsque l’état du malade s’est aggravé et qu’il est en fin de vie.
                            </p>
                            <p>
                              - Le malade peut être transporté à son domicile si lui-même ou sa famille en expriment le désir.
                            </p>
                            <p>
                              - La famille ou les proches peuvent demeurer auprès de lui et l’assister dans ses derniers instants.
                            </p>
                            <h4>2- Information sur le décès  </h4>
                            <p>
                              L’information concernant le décès est communiquée à la famille ou aux proches du malade ou à la «personne à prévenir» désignée par ce dernier lors de son admission.
                            </p>
                            <p>
                              La notification du décès est faite aux autres personnes ou autorités ayant en charge le patient se trouvant dans une situation spécifique en droit ou de fait et, pour les personnes non identifiées, aux services de police.
                            </p>
                            <p>
                              En cas de signes ou d’indices de mort violente d’un malade hospitalisé l’autorité judiciaire est avisée immédiatement par le Directeur Général ou son représentant prévenu par le médecin chef du service.
                            </p>
                            <h4>3- Formalités entourant le décès</h4>
                            <p>
                              - Le surveillant médical, aidé d’un deuxième soignant, sont chargés de dresser l’inventaire de tous les objets, vêtements, bijoux, sommes d’argent, papiers, clefs que le défunt avait en sa possession.
                            </p>
                            <p>
                              - Cet inventaire est dressé en présence d’au moins deux témoins.
                            </p>
                            <p>
                              - L’inventaire est inscrit sur un registre, côté et paraphé, tenu dans chaque service d’hospitalisation.
                            </p>
                            <p>
                              - L’inventaire est signé par le surveillant médical et les deux témoins, puis remis dans les 24 heures avec les objets qui y figurent, au régisseur des dépôts de l’EHUO.
                            </p>
                            <p>
                              - Aucun de ces objets ne peut être remis directement par le personnel ayant aux droits du malade ou aux proches du malade.
                            </p>
                            <p>
                              - Le régisseur de dépôt ne peut prendre en compte que les objets de valeur : bijoux, argent, carte bancaire, chéquiers.
                            </p>
                            <p>
                              - Les espèces, valeurs et bijoux sont immédiatement remis au comptable de l’établissement qui les restitue  ayant droit après signature d’une décharge.
                            </p>
                            <p>
                              - En cas de non observation de ces règles, l’agent engage sa responsabilité et celle de l’hôpital.
                            </p>
                            <h4>4- Certificat de cause de décès</h4>
                            <p>
                              - Tout décès survenant à l’EHUO doit faire l’objet de l’établissement d’un certificat de cause de décès, rempli et signé lisiblement, avec l’apposition de la griffe, par le médecin traitant ou celui ayant constaté le décès après consultation du dossier médical afin de relever les causes initiale, intermédiaires et directe liées au décès.
                            </p>
                            <p>
                              - Le formulaire de certificat des causes de décès est fourni par l’administration de l’EHUO, conformément au modèle établi par le ministère de la santé.
                            </p>
                            <p>
                              - Un formulaire de Constatation de Décès Périnatal et Néonatal tardif est établi pour tous les décès  d’enfants mort-nés et ceux décédés avant le 6ème jour de vie révolu et ceux décédés avant le 27ème jour de vie révolu.
                            </p>
                            <p>
                              - Le certificat de cause de décès est adressé au Bureau des Entrées aux fins de le valider par le SEMEP et, par la suite, de le transmettre à la DSPRH et à l’INSP
                            </p>
                            <h4>5- Autopsies</h4>
                            <p>
                              Les autopsies peuvent être pratiquées dans les structures hospitalières :
                            </p>
                            <ol>
                              <li>à la demande de l’autorité publique dans un cadre médico-légal.</li>
                              <li>à la demande du médecin spécialiste dans un but scientifique.</li>
                            </ol>
                            <p>
                              Les autopsies, dans un but scientifique, peuvent être pratiquées dans le respect des dispositions prévues par la loi.
                            </p>
                          </div>
                        </div>
                      </p>
                    </div>
                  </div>
                  <!-- /.container -->
                  <!-- Footer -->
                  <footer class="text-light">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-3 col-lg-4 col-xl-5">
                          <h5>
                            À propos
                          </h5>
                          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                          <p class="mb-0">
                            L'établissement hospitalier universitaire, connu sous le nom de l'EHU, est un hôpital universitaire créé en 2012, qui est situé à Oran.
                          </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3">
                          <h5>
                            Contact
                          </h5>
                          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                          <ul class="list">
                            <li><i class="fa fa-envelope mr-2"></i>contact@ehuoran.dz</li>
                            <li><i class="fa fa-phone mr-2"></i> (+213) 041 70 50 92</li>
                            <li><i class="fa fa-phone mr-2"></i> (+213) 041 70 50 88</li>
                            <li><i class="fa fa-phone mr-2"></i> (+213) 041 70 50 87</li>
                          </ul>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-3 mx-auto">
                          <h5>
                            Retrouvez-nous sur :
                          </h5>
                          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                          <ul class="list-unstyled">
                            <li>
                              <a href="https://www.facebook.com/EHUDORAN" class="fb btn"target="_blank" style="background-color: #4267B2;color: white;"><i class="fa fa-facebook fa-fw fa-2x" style="" ></i></a>
                              <a href="https://twitter.com/ehuoran" class="twitter btn"target="_blank" style="background-color: #38A1F3;color: white;"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                            </li>
                          </ul>
                        </div>
                        <div class="col">
                          <center>
                            <strong><p>Copyright © 2012-2020. All rights reserved.</p></strong>
                          </center>
                        </footer>
                        <a id ="topbutton" class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
                        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
                      </html>

<!-- fonction js pour dark/light mode-->
<script>
  (function() {
  // Theme switch
  var themeSwitch = document.getElementById('themeSwitch');
  if(themeSwitch) {
    initTheme(); // if user has already selected a specific theme -> apply it
    themeSwitch.addEventListener('change', function(event){
      resetTheme(); // update color theme
    });

    function initTheme() {
      var darkThemeSelected = (localStorage.getItem('themeSwitch') !== null && localStorage.getItem('themeSwitch') === 'dark');
      // update checkbox
      themeSwitch.checked = darkThemeSelected;
      // update body data-theme attribute
      darkThemeSelected ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
    };

    function resetTheme() {
      if(themeSwitch.checked) { // dark theme has been selected
        document.body.setAttribute('data-theme', 'dark');
        localStorage.setItem('themeSwitch', 'dark');
      } else {
        document.body.removeAttribute('data-theme');
        localStorage.removeItem('themeSwitch');
      } 
    };
  }
  // Main Header component JS
  var mainHeader = document.getElementsByClassName('js-main-header')[0];
  if( mainHeader ) {
    var trigger = mainHeader.getElementsByClassName('js-main-header__nav-trigger')[0],
      nav = mainHeader.getElementsByClassName('js-main-header__nav')[0];
    //detect click on nav trigger
    trigger.addEventListener("click", function(event) {
      event.preventDefault();
      var ariaExpanded = !Util.hasClass(nav, 'main-header__nav--is-visible');
      //show nav and update button aria value
      Util.toggleClass(nav, 'main-header__nav--is-visible', ariaExpanded);
      trigger.setAttribute('aria-expanded', ariaExpanded);
      if(ariaExpanded) { //opening menu -> move focus to first element inside nav
        nav.querySelectorAll('[href], input:not([disabled]), button:not([disabled])')[0].focus();
      }
    });
  }
}());</script>
<script>//Get the button:
mybutton = document.getElementById("topbutton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>