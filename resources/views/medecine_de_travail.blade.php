<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Médecine de travail</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/medecine_de_travail.css') }}">
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
            <img src="/images/medecinetravail.png">
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
                    <li><a href="/medecine_de_travail"class="colorsidedropdown"style="color:red;">►Médecine de travail</a></li>
                    <li><a href="/medecine_interne"class="colorsidedropdown">►Médecine interne</a></li>
                    <a href="/medecine_legale"class="colorsidedropdown">►Médecine légale</a>
                  </li>
                  <li><a href="/medecine_physique"class="colorsidedropdown">►Médecine physique </a></li>
                  <li><a href="/nephrologie"class="colorsidedropdown">►Néphrologie </a></li>
                  <a href="/neurophysiologie"class="colorsidedropdown">►Neurophysiologie </a>
                </li>
                <li><a href="/pneumologie"class="colorsidedropdown">►Pneumologie</a></li>
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
            <strong>Chef de service: B. REZK-KALLAH (Professeur)</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Tél / fax : (+213) 41 70 50 98 / (+213) 41 70 51 01</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Email : rezkkallah.baghdad@gmail.com</strong>
          </h5>
        </li>
      </ul>
      <h2><strong>Présentation du service</strong></h2>
      <p>
        Le service de Médecine du Travail, rattaché au « pôle Médecine », a pour principales missions la prévention des risques professionnels et le suivi médical des travailleurs, telles que définies par la loi n° 88-07 du 26 janvier 1988 relative à l’hygiène, à la sécurité et à la médecine du travail :
      </p>
      <ul>
        <li>Préserver la santé des travailleurs.</li>
        <li>Conseiller sur la gestion des risques professionnels.</li>
        <li>Accompagner les employeurs et leurs salariés.</li>
        <li>Améliorer les conditions de travail.</li>
        <li>Informer et sensibiliser sur les risques professionnels.</li>
      </ul>
      <p>
        Ces actions sont intégrées à trois niveaux :
      </p>
      <ul>
        <li>Au niveau hospitalier: diagnostic et soins des maladies professionnelles.</li>
        <li>Au niveau des entreprises : évaluation et prévention des risques professionnels.</li>
        <li>Au niveau universitaire: formation et recherche.</li>
      </ul>
      <h4>AU NIVEAU HOSPITALIER</h4>
      <ol>
        <li>Consultation spécialisée de pathologie professionnelle :</li>
        <ul>
          <li>Aide les médecins d'entreprises, et tout médecin ou toute personne qui le demande, à reconnaitre et à prévenir les affections ayant une relation avec des activités professionnelles</li>
          <li>Regroupe différentes compétences en pathologies professionnelles : pneumo-dermato-allergologie, pathologie ostéo-articulaire, toxicologie, ORL, etc...</li>
        </ul>
        <p>
          Elle permet :
        </p>
        <ul>
          <li>Une aide au diagnostic et au traitement des pathologies professionnelles.</li>
          <li>Le repérage des expositions professionnelles.</li>
          <li>La détermination de l'aptitude au travail.</li>
          <li>Le reclassement et l’orientation professionnels.</li>
        </ul>
        <img src="/images/medecinetravail.jpg" class="medecinetravail">
        <li>Plateau technique et explorations :</li>
        <ul>
          <li>Physiologie du travail : Etude de la charge physique par enregistrement de la fréquence cardiaque.</li>
          <li>Batteries pour tests épi-cutanés standards et spécifiques professionnels (résines, pigments, métaux...)</li>
          <li>Exploration de la vision : vision des couleurs, dépistage des anomalies de la vision.</li>
          <li>Exploration fonctionnelle auditive.</li>
          <li>Exploration de la fonction respiratoire (EFR)</li>
          <li>Métrologies d'ambiances: bruit, éclairage, ambiances thermiques.</li>
        </ul>
        <li>Expertise médico-légale et évaluation des dommages corporels :</li>
        <ul>
          <li>Aide les médecins de la CNAS à la prise de décision en matière d’incapacité de travail, d’invalidité, et d’évaluation des handicaps.</li>
          <li>Emet des avis à la demande des salariés et des employeurs en matière d’aptitude et de réorientation professionnelle.</li>
        </ul>
        <li>Cellule d’écoute psychologique :</li>
        <p>
          L’équipe médicale est assistée par une psychologue du travail qui conseille et propose une prise en charge des souffrances psychologiques au travail quelle qu’en soit la nature pour le maintien ou le retour au travail.
        </p>
        <li>Prise en charge des conduites addictives au travail :</li>
        <ul>
          <li>Tabac.</li>
          <li>Alcool</li>
          <li>Drogue</li>
        </ul>
        <li>Activités de médecine du travail pour le personnel de l’EHUO :</li>
        <ul>
          <li>Consultations médicales réglementaires.</li>
          <li>Vaccinations obligatoires et recommandées: hépatite virale B, grippe...</li>
          <li>Examens complémentaires ciblés en fonction des risques.</li>
          <li>Identification, Evaluation et Prévention des risques sanitaires liés au travail en milieu hospitalier.</li>
          <li>Surveillance épidémiologique adaptée aux risques hospitaliers.</li>
        </ul>
      </ol>
      <h4>AU NIVEAU DES ENTREPRISES</h4>
      <ol>
        <li>Surveillance médicale des travailleurs</li>
        <p>
          En fonction des risques concernant la santé, la sécurité et la pénibilité au travail :
        </p>
        <ul>
          <li>Visites médicales réglementaires : visite d’embauche, périodique et de reprise.</li>
          <li>Visites médicales spontanées à la demande du salarié ou de l’employeur.</li>
          <li>Vaccinations obligatoires et recommandées Dans une optique de :</li>
          <ul>
            <li>Dépistage ,diagnostic et de prévention des maladies professionnelles.</li>
            <li>Détermination de l'aptitude au travail aux postes à risque.</li>
          </ul>
        </ul>
        <li>Analyse des conditions de travail</li>
        <p>
          En complément des visites médicales, le service de Médecine du Travail assure pour toutes les entreprises conventionnées, des prestations selon les besoins exprimés :
        </p>
        <ul>
          <li>Evaluation des risques professionnels.</li>
          <li>Analyse des accidents du travail.</li>
          <li>Evaluation du risque chimique : élaboration de fiches de données de sécurité.</li>
          <li>Métrologies d’ambiances physiques et chimiques.</li>
          <li>Elaboration et suivi de programmes de santé au travail.</li>
          <li>Actions d'éducation et de formation à visée préventive.</li>
          <li>Audit externe en matière d'hygiène, de sécurité et de Médecine du Travail.</li>
          <li>Audit externe pour l'organisation des services médicaux du travail.</li>
          <li>Formation des infirmiers d’entreprise : pratiques des explorations fonctionnelles, secourisme.</li>
        </ul>
        <li>Conseils des employeurs, des travailleurs en matière de :</li>
        <ul>
          <li>Amélioration des conditions de travail.</li>
          <li>Mesures préventives en santé et hygiène du travail.</li>
          <li>Prévention des accidents du travail.</li>
          <li>Organisation des rythmes de travail.</li>
          <li>Aptitude et réorientation professionnelle.</li>
          <li>Expertise des maladies en relation avec les activités professionnelles.</li>
        </ul>
        <li>Participation aux organes de concertation de l’entreprise :</li>
        <ul>
          <li>Comité Hygiène et Sécurité (CHS)</li>
        </ul>
      </ol>
      <h2>AU NIVEAU UNIVERSITAIRE</h2>
      <ol>
        <li>Formation :</li>
        <ul>
          <li>Formation médicale continue : médecins d’entreprises, médecins du travail.</li>
          <li>Formation et éducation sanitaire : salariés, employeurs.</li>
        </ul>
        <li>Recherche universitaire :</li>
        <p>
          Le service est adossé au Laboratoire de Recherche en Santé Environnement (LRSE) de l’université d’Oran.
        </p>
        <p>
          Les principaux axes de recherche développés sont :
        </p>
        <ul>
          <li>La mise au point d’outils d’évaluation des risques sanitaires et environnementaux.</li>
          <li>La mise au point de méthodes d’analyse des expositions professionnelles.</li>
          <li>L’évaluation des effets à court et à long terme des expositions environnementales et professionnelles.</li>
          <li>L’accès à l’information en santé au travail et environnement.</li>
          <li>La formation en santé au travail et environnement.</li>
        </ul>
      </ol>
      <h4>COMPOSITION DE L’EQUIPE MEDICALE</h4>
      <ul>
        <li>2 Professeurs</li>
        <li>1 Maitre de conférences A</li>
        <li>3 Maitres-assistants</li>
        <li>1 Assistant de santé publique</li>
      </ul>
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