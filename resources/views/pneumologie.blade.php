<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pneumologie</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/pneumologie.css') }}">
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
            <img src="/images/pneumologie.png">
          </p>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <table class="table">
              <tr>
                <th>
                  <a href="#medecine" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="test" style="color: red;">Médecine</a>
                  <ol class="collapse list-unstyled" id="medecine">
                    <div class="col-sm-12">
                      <li><a href="/cardiologie" class="colorsidedropdown" >►Cardiologie</a></li>
                      <li><a href="/dermatologie" class="colorsidedropdown">►Dermatologie</a></li>
                      <li><a href="/medecinepreventive"class="colorsidedropdown">►Médecine préventive</a></li>
                      <li><a href="/endocrinologie"class="colorsidedropdown">►Endocrinologie </a></li>
                      <a href="/gastro_enterologie"class="colorsidedropdown">►Gastro entérologie</a>
                    </li>
                    <li><a href="/hematologie"class="colorsidedropdown">►Hématologie </a></li>
                    <li><a href="/medecine_de_travail"class="colorsidedropdown">►Médecine de travail</a></li>
                    <li><a href="/medecine_interne"class="colorsidedropdown">►Médecine interne</a></li>
                    <a href="/medecine_legale"class="colorsidedropdown">►Médecine légale</a>
                  </li>
                  <li><a href="/medecine_physique"class="colorsidedropdown">►Médecine physique </a></li>
                  <li><a href="/nephrologie"class="colorsidedropdown">►Néphrologie </a></li>
                  <a href="/neurophysiologie"class="colorsidedropdown">►Neurophysiologie </a>
                </li>
                <li><a href="/pneumologie"class="colorsidedropdown"style="color:red;">►Pneumologie</a></li>
                <li><a href="/reanimation_medicale"class="colorsidedropdown">►Réanimation médicale </a></li>
                <li><a href="/oncologie"class="colorsidedropdown">►Oncologie </a></li>
                <li><a href="/neurologie"class="colorsidedropdown">►Neurologie </a></li>
                <li><a href="/reanimation_pediatrique"class="colorsidedropdown">►Réanimation pédiatrique </a></li>
              </ol>
            </th>
          </tr>
        </div>
        <tr>
          <th>
            <a href="#chirurgie" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chirurgie</a>
            <ol class="collapse list-unstyled" id="chirurgie">
              <div class="col-sm-12">
                <li><a href="/cardiaque"class="colorsidedropdown">►Cardiaque</a></li>
                <li><a href="/generale"class="colorsidedropdown">►Générale</a></li>
                <li><a href="/hepatobiliaire"class="colorsidedropdown">►Hépatobiliaire</a></li>
                <li><a href="/maxillo_faciale"class="colorsidedropdown">►Maxillo-faciale</a></li>
                <a href="/thoracique"class="colorsidedropdown">►Thoracique</a>
              </li>
              <li><a href="/vasculaire"class="colorsidedropdown">►Vasculaire</a></li>
              <li><a href="/orl"class="colorsidedropdown">►O.R.L</a></li>
              <li><a href="/urologie"class="colorsidedropdown">►Urologie</a></li>
              <a href="/orthopedique"class="colorsidedropdown">►Orthopédique et Traumatologique</a>
            </li>
            <li><a href="/neurochirurgie"class="colorsidedropdown">►Neurochirurgie</a></li>
          </div>
        </ol>
      </th>
    </tr>
    <tr>
      <th>
        <a href="#radiologie" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Radiologie</a>
        <ol class="collapse list-unstyled" id="radiologie">
          <div class="col-sm-12">
            <li><a href="/imagerie_medicale"class="colorsidedropdown">►Imagerie médicale</a></li>
            <li><a href="/medecine_nucleaire"class="colorsidedropdown">►Médecine nucléaire</a></li>
          </div>
        </ol>
      </th>
    </tr>
    <tr>
      <th>
        <a href="#analyses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Analyses</a>
        <ol class="collapse list-unstyled" id="analyses">
          <div class="col-sm-15">
            <li><a href="/biochimie"class="colorsidedropdown">►Biochimie</a></li>
            <li><a href="/bacteriologie"class="colorsidedropdown">►Bactériologie</a></li>
            <li><a href="/hemobiologie "class="colorsidedropdown">►Hémobiologie</a></li>
            <li><a href="/immunologie"class="colorsidedropdown">►Immunologie</a></li>
            <li><a href="/pharmacologie"class="colorsidedropdown">►Pharmacologie</a></li>
            <li><a href="/toxicologie"class="colorsidedropdown">►Toxicologie</a></li>
            <li><a href="/cytogenetique"class="colorsidedropdown">►Cytogénétique et Biologie Moléculaire</a></li>
          </div>
        </ol>
      </th>
    </tr>
    <tr>
      <th scope="row">
        <a href='/maternite' class="maternite">Maternité</th>
      </tr>
      <tr>
        <th scope="row">
          <a href='/urgences' class="urgences">Urgences</th>
        </tr>
      </table>
      <div></div>
    </div>
    <div class="col-sm-8">
      <ul>
        <li>
          <h5>
            <strong>Chef de service: LELLOU Salah (Professeur)</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Tél / fax : (+213) 41 70 51 17</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Email : s_lellou 2007@hotmail.fr</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Email du service : ehuopneumo@yahoo.com</strong>
          </h5>
        </li>
      </ul>
      <h2><strong>Présentation du service</strong></h2>
      <p>
        Le service de pneumologie de l’EHUO a ouvert ses portes en 2008 par la consultation et puis 2009 l'hospitalisation, il est composé de 03 structures :
      </p>
      <ul>
        <li>La structure d’hospitalisation située au 5e étage ;entrée NEDJMA bâtiment A.</li>
        <li>La structure d’endoscopie bronchique et pleurale exploratrice et interventionnelle  située au 3e étage au niveau du plateau technique.</li>
        <li>La structure de consultation, d’exploration fonctionnelle et respiratoire (EFR), d’allergologie et hôpital du jour, située au 2e étage du bloc de consultation.</li>
      </ul>
      <h2><strong>Missions</strong></h2>
      <ul>
        <li>Soins.</li>
        <li>enseignement.</li>
        <li>Recherche.</li>
        <p>
          La capacité d’hospitalisation est de 30 lits.
        </p>
      </ul>
      <h4><strong>Les activités du service</strong></h4>
      <ul>
        <li>L’hospitalisation a démarré en juillet 2009 à la suite de sa désignation comme service de référence de la prise en charge de la grippe AH1N1, les autres activités est suivi par la suite.</li>
        <li>Endoscopie bronchique et thoracique : activité quotidienne depuis octobre 2010: 04 fibroscopies par jour en moyenne.</li>
        <li>Démarrage de l'écho endoscopie bronchique année 2016 , l'activité n'est pas régulière pou le moment en raison de l'absence d'aiguilles de ponction.</li>
        <li>Consultations; elles se font tous les jours sur lettre d'orientation,sans rendez-vous à la première consultation:</li>
        <ul>
          <li>3 bureaux de consultation pour résidents.</li>
          <li>1 bureau de consultation pour assistants.</li>
          <li>1 bureau de consultation pour le professeur tous les dimanches.</li>
          <li>Consultation de tabacologie tous les mercredi à 13h.</li>
          <li>Consultation de BPCO tous les lundis à 13h.</li>
          <li>Consultation HTAP tous les mardis à 13h.</li>
        </ul>
      </ul>
      <h4><strong>Autres informations</strong></h4>
      <ol>
        <li>Autres activités du service :</li>
        <ul>
          <li>Visite générale tous les jeudis à 09h.</li>
          <li>Rapport de garde tous les matins à 09h.</li>
          <li>Colloque du service mardi à 13h.</li>
          <li>Cas clinique pour résidents mercredi à 13h.</li>
          <li>Séance de lecture de radiologie pour résidents 1ere année dimanche à 12h .</li>
        </ul>
        <li>Perspectives à court terme :</li>
        <ul>
          <li>Lancer la thoracoscopie.</li>
          <li>Lancer les épreuves d’effort cardiorespiratoires.</li>
          <li>Démarrer d’autres explorations fonctionnelles respiratoires : la plesthysmographie (résistance des voies aériennes, le volume gazeux intra thoracique, la compliance, la DLCO, épreuves de broncho provocation.</li>
          <li>Ouvrir un laboratoire du sommeil.</li>
          <li>Ouvrir l’hôpital du jour au niveau de la consultation.</li>
        </ul>
        <li>Perspectives à moyen terme :</li>
        <ul>
          <li>Endoscopie interventionnelle.</li>
        </ul>
        <li>Activité de recherche et de formation :</li>
        <ul>
          <li>La formation des résidents et des externes s’inscrit dans le cadre des programmes tracés par le comité pédagogique de graduation et de post graduation.</li>
          <li>Les résidents et les internes de service sont encadrés dans les activités de soins et d’actes médicaux par les assistants du service.</li>
          <li>La recherche : notre service participe avec les autres services dans certains projets de recherche  tel que :</li>
          <p>
            Projet de recherche intitulé : mise en place du réseau hôpital sans tabac chef de projet PR ZIANE.
          </p>
          <p>
            Un axe de travail dans la recherche est lance dans notre service, il s’agit des thèmes suivants :
          </p>
          <ol>
            <li>L’hypertension artérielle pulmonaire (HTAP)</li>
            <li>Les infections respiratoires basses sévères.</li>
            <li>Les pneumopathies interstielles diffuses (PID)</li>
            <li>Le cancer bronchique.</li>
            <li>La prévalence de la BPCO à Oran.</li>
            <li>Diabète et pathologies respiratoires.</li>
            <li>Tuberculose pulmonaire et pleurale</li>
            <li>Pathologie médiastinale.</li>
            <li>Facteurs du mauvais contrôle de l’asthme.</li>
          </ol>
        </ul>
        <li>Composition de l’équipe médicale</li>
        <ul>
          <strong><li>PR LELLOU Salah chef de service</li></strong>
          <li>Maitres assistants :</li>
          <ul>
            <li>DR TERFANI Djahida.</li>
            <li>DR BOUHEDDA Mokhtar.</li>
          </ul>
          <li>Spécialistes santé publique :</li>
          <ul>
            <li>DR BOUSEHABA Hanifi.</li>
            <li>DR GUEZA Nawel.</li>
          </ul>
          <li>Résidents 4eme année :</li>
          <ul>
            <li>DR BELGHITRI Amina.</li>
            <li>DR KADDOUR Bachir.</li>
            <li>DR MAROUF Rabéa Yasmine.</li>
            <li>DR MOUFFOKES Fatima Zohra.</li>
            <li>DR YASSA Soumia.</li>
          </ul>
          <li>Résidents 3eme année :</li>
          <ul>
            <li>DR GUEN Bahria.</li>
            <li>DR ISSAD Mohamed Amine.</li>
            <li>DR MAHIEDDINE Fatima.</li>
            <li>DR SAÏAH Habbaze Samir.</li>
          </ul>
          <li>Résidents 2eme année :</li>
          <ul>
            <li>DR BEDDIAR Fatima.</li>
            <li>DR BETAHAR Amina.</li>
            <li>DR HARKATI Hayat.</li>
            <li>DR MAHI Khadidja.</li>
            <li>DR KHALOUF Faiza.</li>
          </ul>
          <li>Résidents 1ère année :</li>
          <ul>
            <li>DR BELALIA Aoued.</li>
            <li>DR BOUACHERIA Fatima Zohra.</li>
            <li>DR OUMARI Abdelmalek.</li>
          </ul>
        </ul>
      </ol>
    </div>
  </div>
</p>
</div>
</div>
<!-- /.container -->
<!-- Footer -->
<!-- Footer -->
<footer class="text-light"><div class="container">
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