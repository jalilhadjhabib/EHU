<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Consultation Médicale</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/consultation.css') }}">
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
            <img src="/images/consultation.png" alt="droitspatient">
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
                          <th scope="row"style="background-color: red;">
                            <a href='/consultation' class="colorcollum">Votre consultation</th>
                          </tr>
                          <tr>
                            <th scope="row">
                              <a href='/don' class="colorcollum">Don et prélèvements</th>
                            </tr>
                            <tr>
                              <th scope="row">
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
                            <h2><strong>Les consultations</strong></h2>
                            <p>
                              L’organisation de l’activité dans les services a pour objet d’assurer en continu la permanence des soins et la sécurité des malades hospitalisés ou admis en urgence.
                              <p>
                                <p>
                                  - Les consultations et soins externes s’adressent aux malades dont l’état ne justifie pas une hospitalisation au sein de l’EHUO.
                                  <p>
                                    <p>
                                      - Les consultations externes de l’EHUO sont localisées dans le bloc réservé à cette activité.
                                    </p>
                                    <p>
                                      - Chaque service de l’EHUO  dispose d’une unité de consultation. L’organisation est sous  la responsabilité du médecin-chef de service et du médecin chef d’unité.
                                    </p>
                                    <p>
                                      - Le surveillant médical d’unité est chargé de la  coordination selon les prérogatives définies.
                                    </p>
                                    <p>
                                      - Les mesures d’organisation sont mises en œuvre pour  un fonctionnement satisfaisant de ces consultations, en s’assurant de l’attention apportée à l’accueil des consultants, tout particulièrement sur le plan des rendez-vous et des délais d’attente.
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