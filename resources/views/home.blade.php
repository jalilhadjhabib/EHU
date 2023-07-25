<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Établissement Hospitalier Universitaire d'Oran</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}">
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
        <div class="contest">
          <div class="container">
            <h1>
              <br>
              <strong>Bienvenue sur le site de l'EHU Oran</strong>
            </h1>
            <p>
              L'établissement hospitalier universitaire, connu sous le nom de l'EHU, est un hôpital universitaire créé en 2012, qui est situé à Oran.
            </p>
          </div>
        </div>
      </section>
      <div class="contest2">
        <div class="container">
          <div class="row">
            <div class="col">
              <br>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/ehu1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ehu2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ehu3.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ehu4.png" alt="Fourth slide">
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div></div>
<br />
</div>
<div class="col"><h2>
<center><strong>
  Les pôles d'activité
</strong>
</center>
</h2>
<br>
<div class="container"><div class="row">
<div class="col-sm-4">
  <a href="/medecine">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Médecine</h4>
        <i class="fas fa-briefcase-medical fa-3x"></i>
      </i>
    </button>
  </a>
</div>
<div class="col-sm-4">
  <a href="/chirurgie">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Chirurgie</h4>
        <i class="fas fa-syringe fa-3x"></i>
      </i>
    </button>
  </a>
</div>
<div class="col-sm-4">
  <a href="/maternite">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Maternité</h4>
        <i class="fas fa-hand-holding-medical fa-3x"></i>
      </i>
    </button>
  </a>
</div>
</div>
</div>
<br>
<br>
<div class="container"><div class="row">
<div class="col-sm-4">
  <a href="/urgences">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Urgences</h4>
        <i class="fas fa-ambulance fa-3x"></i>
      </i>
    </button>
  </a>
</div>
<div class="col-sm-4">
  <a href="/radiologie">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Radiologie</h4>
        <i class="fas fa-x-ray fa-3x"></i>
      </i>  
    </button>
  </a>
</div>
<div class="col-sm-4">
  <a href="/analyses">
    <button class="buttonhome">
      <i class="iconhome">
        <h4>Analyses</h4>
        <i class="fas fa-microscope fa-3x"></i>
      </i>
    </button>
  </a>
</div>
</div>
</div>
</div>
<br>
<br>
<div class="container"><div class="row">
<div class="col-sm-1"></div>
<div class="col"><p>
  <h5>
    <center>
      Le patient est au centre de nos préoccupations afin de lui fournir les soins et services souhaités en les intégrant dans sa prise en charge avant et après l'hospitalisation.
    </center>
  </h5>
</p>
</div>
</div>
</div>
<br>
<br>
<div class="col"><center>
<h2><strong>
  <a>Transport du personnel EHU Oran</a>
</strong>
</h2>
</center>
</div>
<br>
<div class="container"><div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-5"><center>
  <h4>BUS 11053 N°03</h4>
  </br>
  <center>
    <table class="table">
      <thead>
        <tr>
          <th scope="col"style="color: white;">
            N°
          </th>
          <th scope="col"style="color: white;">
            Arrêt
          </th>
          <th scope="col"style="color: white;">
            Horaire
          </th>
        </tr>
      </thead>
      <tbody class="numbertable">
        <tr>
          <th>
            1
          </th>
          <td>
            Sorte dépot
          </td>
          <td>
            06H00
          </td>
        </tr>
        <tr>
          <th scope="row">
            2
          </th>
          <td>
            Ain Turk
          </td>
          <td>
            06H30
          </td>
        </tr>
        <tr>
          <th scope="row">
            3
          </th>
          <td>
            Trouville
          </td>
          <td>
            06H35
          </td>
        </tr>
        <tr>
          <th scope="row">
            4
          </th>
          <td>
            EL Mersa
          </td>
          <td>
            06H50
          </td>
        </tr>
        <tr>
          <th scope="row">
            5
          </th>
          <td>
            Sid El Houari OPGI
          </td>
          <td>
            07H05
          </td>
        </tr>
        <tr>
          <th scope="row">
            6
          </th>
          <td>
            Place 01 Novembre
          </td>
          <td>
            07H10
          </td>
        </tr>
        <tr>
          <th scope="row">
            7
          </th>
          <td>
            Boulvard Zabana
          </td>
          <td>
            07H15
          </td>
        </tr>
        <tr>
          <th scope="row">
            8
          </th>
          <td>
            Dar El Chakori
          </td>
          <td>
            07H20
          </td>
        </tr>
        <tr>
          <th scope="row">
            9
          </th>
          <td>
            Plateau Hotel Houna
          </td>
          <td>
            07H25
          </td>
        </tr>
        <tr>
          <th scope="row">
            10
          </th>
          <td>
            La RTA
          </td>
          <td>
            07H30
          </td>
        </tr>
        <tr>
          <th scope="row">
            11
          </th>
          <td>
            Wilaya
          </td>
          <td>
            07H35
          </td>
        </tr>
        <tr>
          <th scope="row">
            12
          </th>
          <td>
            Gambetta
          </td>
          <td>
            07H40
          </td>
        </tr>
        <tr>
          <th scope="row">
            13
          </th>
          <td>
            HLM
          </td>
          <td>
            07H45
          </td>
        </tr>
        <tr>
          <th scope="row">
            14
          </th>
          <td>
            Rond point El Morchid
          </td>
          <td>
            07H50
          </td>
        </tr>
        <tr>
          <th scope="row">
            15
          </th>
          <td>
            Hay El yasmin
          </td>
          <td>
            08H00
          </td>
        </tr>
        <tr>
          <th scope="row">
            16
          </th>
          <td>
            Haï El Sabah
          </td>
          <td>
            08H10
          </td>
        </tr>
        <tr>
          <th scope="row">
            17
          </th>
          <td>
            Hopital EHU
          </td>
          <td>
            08H15
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-sm-5">
    <center>
      <h4>BUS 11009 N°02</h4>
      <center>
        </br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"style="color: white;">
                N°
              </th>
              <th scope="col"style="color: white;">
                Arrêt
              </th>
              <th scope="col"style="color: white;">
                Horaire
              </th>
            </tr>
          </thead>
          <tbody class="numbertable">
            <tr>
              <th scope="row">
                1
              </th>
              <td>
                Sorte dépot
              </td>
              <td>
                06H15
              </td>
            </tr>
            <tr>
              <th scope="row">
                2
              </th>
              <td>
                Guediel
              </td>
              <td>
                06H35
              </td>
            </tr>
            <tr>
              <th scope="row">
                3
              </th>
              <td>
                Benokba
              </td>
              <td>
                06H50
              </td>
            </tr>
            <tr>
              <th scope="row">
                4
              </th>
              <td>
                Hassi bounif
              </td>
              <td>
                07H05
              </td>
            </tr>
            <tr>
              <th scope="row">
                5
              </th>
              <td>
                Boudjemaa
              </td>
              <td>
                07H15
              </td>
            </tr>
            <tr>
              <th scope="row">
                6
              </th>
              <td>
                Sid El Bachir
              </td>
              <td>
                07H10
              </td>
            </tr>
            <tr>
              <th scope="row">
                7
              </th>
              <td>
                Belgaid (BRI)
              </td>
              <td>
                07H40
              </td>
            </tr>
            <tr>
              <th scope="row">
                8
              </th>
              <td>
                Rond point Canastel
              </td>
              <td>
                07H50
              </td>
            </tr>
            <tr>
              <th scope="row">
                9
              </th>
              <td>
                Rond point Bouchikhi
              </td>
              <td>
                07H55
              </td>
            </tr>
            <tr>
              <th scope="row">
                10
              </th>
              <td>
                Bir El Djir
              </td>
              <td>
                08H05
              </td>
            </tr>
            <tr>
              <th scope="row">
                11
              </th>
              <td>
                Melinium
              </td>
              <td>
                08H10
              </td>
            </tr>
            <tr>
              <th scope="row">
                12
              </th>
              <td>
                Rond point Seddikia
              </td>
              <td>
                08H15
              </td>
            </tr>
            <tr>
              <th scope="row">
                13
              </th>
              <td>
                AADL Pépiniere
              </td>
              <td>
                08H20
              </td>
            </tr>
            <tr>
              <th scope="row">
                14
              </th>
              <td>
                AADL Cosider
              </td>
              <td>
                08H30
              </td>
            </tr>
            <tr>
              <th scope="row">
                15
              </th>
              <td>
                Hopital EHU
              </td>
              <td>
                08H40
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <center>
          <h4>BUS 11064 N°01</h4>
        </center>
        </br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"style="color: white;">
                N°
              </th>
              <th scope="col"style="color: white;">
                Arrêt
              </th>
              <th scope="col"style="color: white;">
                Horaire
              </th>
            </tr>
          </thead>
          <tbody class="numbertable">
            <tr>
              <th scope="row">
                1
              </th>
              <td>
                Sorte dépot
              </td>
              <td>
                06H00
              </td>
            </tr>
            <tr>
              <th scope="row">
                2
              </th>
              <td>
                Boutelilis
              </td>
              <td>
                06H20
              </td>
            </tr>
            <tr>
              <th scope="row">
                3
              </th>
              <td>
                Mesreghine
              </td>
              <td>
                06H30
              </td>
            </tr>
            <tr>
              <th scope="row">
                4
              </th>
              <td>
                El Hassi
              </td>
              <td>
                06H45
              </td>
            </tr>
            <tr>
              <th scope="row">
                5
              </th>
              <td>
                Amandier
              </td>
              <td>
                07H00
              </td>
            </tr>
            <tr>
              <th scope="row">
                6
              </th>
              <td>
                Cité petit
              </td>
              <td>
                07H05
              </td>
            </tr>
            <tr>
              <th scope="row">
                7
              </th>
              <td>
                Maraval
              </td>
              <td>
                07H10
              </td>
            </tr>
            <tr>
              <th scope="row">
                8
              </th>
              <td>
                Stade Zabana
              </td>
              <td>
                07H15
              </td>
            </tr>
            <tr>
              <th scope="row">
                9
              </th>
              <td>
                Tirigo
              </td>
              <td>
                07H20
              </td>
            </tr>
            <tr>
              <th scope="row">
                10
              </th>
              <td>
                Rond point Castor
              </td>
              <td>
                07H25
              </td>
            </tr>
            <tr>
              <th scope="row">
                11
              </th>
              <td>
                El Bahia
              </td>
              <td>
                08H35
              </td>
            </tr>
            <tr>
              <th scope="row">
                12
              </th>
              <td>
                Cité Djamel
              </td>
              <td>
                08H40
              </td>
            </tr>
            <tr>
              <th scope="row">
                13
              </th>
              <td>
                Rond poit El Morchid
              </td>
              <td>
                07H45
              </td>
            </tr>
            <tr>
              <th scope="row">
                14
              </th>
              <td>
                El Nakkach
              </td>
              <td>
                07H50
              </td>
            </tr>
            <tr>
              <th scope="row">
                15
              </th>
              <td>
                Hopital EHU
              </td>
              <td>
                08H00
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-sm-5">
        <center>
          <h4>BUS 11028 N°05</h4>
        </center>
        </br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"style="color: white;">
                N°
              </th>
              <th scope="col"style="color: white;">
                Arrêt
              </th>
              <th scope="col"style="color: white;">
                Horaire
              </th>
            </tr>
          </thead>
          <tbody class="numbertable">
            <tr>
              <th scope="row">
                1
              </th>
              <td>
                Sorte dépot
              </td>
              <td>
                06H00
              </td>
            </tr>
            <tr>
              <th scope="row">
                2
              </th>
              <td>
                Tlilet (Agence)
              </td>
              <td>
                06H40
              </td>
            </tr>
            <tr>
              <th scope="row">
                3
              </th>
              <td>
                El Karma
              </td>
              <td>
                07H10
              </td>
            </tr>
            <tr>
              <th scope="row">
                4
              </th>
              <td>
                Chtaibou
              </td>
              <td>
                07H30
              </td>
            </tr>
            <tr>
              <th scope="row">
                5
              </th>
              <td>
                Rond point Saint Remy
              </td>
              <td>
                07H40
              </td>
            </tr>
            <tr>
              <th scope="row">
                6
              </th>
              <td>
                Rond poin Sabah
              </td>
              <td>
                07H50
              </td>
            </tr>
            <tr>
              <th scope="row">
                7
              </th>
              <td>
                Hopital EHU
              </td>
              <td>
                08H00
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </br>
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