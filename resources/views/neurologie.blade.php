<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Neurologie</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/neurologie.css') }}">
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
            <img src="/images/neurologie.png">
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
                <li><a href="/pneumologie"class="colorsidedropdown">►Pneumologie</a></li>
                <li><a href="/reanimation_medicale"class="colorsidedropdown">►Réanimation médicale </a></li>
                <li><a href="/oncologie"class="colorsidedropdown">►Oncologie </a></li>
                <li><a href="/neurologie"class="colorsidedropdown"style="color:red;">►Neurologie </a></li>
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
            <strong>Chef de service: ALI LAHMAR Hadj Mohamed</strong>
          </h5>
        </li>
        <li>
          <h5>
            <strong>Email : dounia_badsi@yahoo.fr</strong>
          </h5>
        </li>
      </ul>
      <h2><strong>Présentation</strong></h2>
      <p>
        La Neurologie Vasculaire ou Neurovasculaire est la partie de la neurologie spécifiquement dédiée à la prise en charge des AVC ou attaques cérébrales.
      </p>
      <p>
        L’individualisation du Neurovasculaire au sein de la Neurologie se justifie par :
      </p>
      <ul>
        <li>La fréquence des AVC, responsables de 40 à 50% des hospitalisations en Neurologie</li>
        <li>La nécessité d’une unité très spécialisée de prise en charge, que l’on appelle Unité Neuro-vasculaire (ou UNV), regroupant médecins et personnel paramédical habitués à prendre en charge les malades en extrême urgence. Initialement, les patients sont accueillis dans des lits de soins intensifs, permettant une surveillance très étroite des fonctions vitales et de l’état neurologique.</li>
      </ul>
      <img src="/images/neuro%202.jpg">
      <img src="/images/neuro2.jpg">
      <p>
        Au sein d’une UNV, trois priorités sont menées de front :
      </p>
      <ul>
        <li>Débuter au plus vite les médicaments pour limiter les conséquences de l’attaque cérébrale et éviter sa récidive. Lorsque les personnes arrivent dans les toutes premières heures, une thrombolyse (perfusion d’un médicament pour dissoudre le caillot) peut être proposée.</li>
        <li>Réaliser les examens permettant de comprendre la cause de l’attaque et d’évaluer son pronostic.</li>
        <li>Débuter la rééducation dés les premiers jours pour stimuler la récupération.</li>
      </ul>
      <p>
        A l’issue de la phase aiguë, l’UNV organise la suite de la prise en charge du patient (retour à domicile, départ en service de soins de suite ou centre de rééducation, etc…). Une attention particulière est également portée à la prévention, car il faut éviter la survenue de récidives et d’autres troubles vasculaires sévères tels qu’un infarctus du myocarde.
      </p>
      <h4><strong>L’équipe </strong></h4>
      <ul>
        <li><strong>Dr d.Badsi-Gaouar : Maitre-assistante en neurologie :chef de service.</strong></li>
        <li>Maitres assistants :</li>
        <ul>
          <li>Dr S.Bouchtara.</li>
          <li>Dr D.Bentabak.</li>
        </ul>
        <li>Assistants :</li>
        <ul>
          <li>Dr Taib :infectiologue.</li>
          <li>Dr MAAMAR :interniste.</li>
        </ul>
        <li>Les médecins généralistes  :</li>
        <ul>
          <li>Dr S.Tilmatine.</li>
          <li>Dr H.Mahnane.</li>
          <li>Dr Zaoui.</li>
          <li>Dr Boussafi.</li>
          <li>Dr Ziari.</li>
          <li>Dr Derder.</li>
        </ul>
        <li>Surveillante medicale  :</li>
        <ul>
          <li>Melle Chaabane Amel.</li>
        </ul>
        <li>Infirmiers :</li>
        <ul>
          <li>10 infirmiers.</li>
        </ul>
        <li>Secrétaire medicale.</li>
      </ul>
      <p>
        La Neurologie est la spécialité médicale centrée sur les maladies organiques des nerfs, excluant les maladies mentales.
      </p>
      <p>
        En ce sens, la neurologie se différencie clairement de la psychiatrie, laquelle prend en charge les dépressions, angoisses, etc…)
      </p>
      <img src="/images/neuro3.jpg">
      <p>
        Compte-tenu de la présence des nerfs dans toutes les parties du corps, la neurologie s’intéresse à denombreuses maladies, très différentes les unes des autres, dont les principales sont :
      </p>
      <ul>
        <li>Les accidents vasculaires cérébraux (ou AVC), encore appelés attaques cérébrales (voir Neurovasculaire)</li>
        <li>Les maladies démyélinisantes et notamment la sclérose en plaques.</li>
        <li>Les tumeurs cérébrales.</li>
        <li>Les épilepsies.</li>
        <li>La maladie de Parkinson et autres maladies du mouvement.</li>
        <li>Les neuropathies périphériques.</li>
        <li>Les céphalées et migraines.</li>
        <li>Les troubles cognitifs et les démences.</li>
      </ul>
      <p>
        En neurologie, une personne est prise en charge pour des symptômes très variés dont l’origine sera précisée par des examens appropriés. Ces symptômes peuvent être :
      </p>
      <ul>
        <li>Paralysie (hémiplégie, paraplégie, paralysie d’une partie d’un membre…)</li>
        <li>Mouvement anormal : tremblement, secousses (ou clonies), mouvements complexes incontrôlés…</li>
        <li>Douleur (céphalée, douleur évoquant la lésion d’un nerf ou d’un ensemble de nerfs)</li>
        <li>Insensibilité d’une partie du corps.</li>
        <li>Perte de connaissance.</li>
        <li>Confusion et/ou agitation.</li>
        <li>Trouble de la marche avec ou sans chutes.</li>
        <li>Troubles de la mémoire, du langage et de l’expression orale.</li>
        <li>Troubles divers : de la vision, de la déglutition, urinaires…</li>
      </ul>
      <p>
        Le Service de Neurologie et Neurovasculaire de l’EHO d’Oran accueille sans distinction des patients présentant ces différents symptômes.
      </p>
      <p>
        Il dispose par ailleurs d’un plateau technique très complet pour les explorations radiologiques, cardiologiques et neurophysiologiques correspondant à ces maladies.
      </p>
      <p>
        Le service de neurologie générale dispose de 25 lits : repartie en 03 unités :
      </p>
      <ul>
        <li>Unité de 08 lits : sclérose en plaque maladies inflammatoires.</li>
        <li>Unité de 08 lits conventionnels pour la pathologie neurovasculaire après la phase aigue.</li>
        <li>Unité de neurologie générale : épilepsie, parkinson, démences,myasthénie, myopathies…</li>
        <li>Une chambre d’isolement (1) lit : pathologie infectieuse.</li>
      </ul>
      <h4><strong>Epilepsie </strong></h4>
      <p>
        Il s’agit de la maladie neurologique qui a donné lieu à la plus grande somme de superstitions et de stigmatisation. Les attitudes des anciennes sociétés face à l’épilepsie ont légué un héritage de préjugés qui persiste encore aujourd’hui. Après la migraine, il s’agit du premier motif de consultation en neurologie. On considère qu’environ 500 000 personnes en France sont atteintes d’épilepsie. Il est important de ne pas confondre une crise d’épilepsie et la maladie épileptique.
      </p>
      <h4><strong>Définition </strong></h4>
      <p>
        Une crise épileptique (parfois appelée crise comitiale) est l’apparition brutale d’une décharge électrique anormale d’un groupe de cellules nerveuses (neurones). Cette décharge peut rester localisée à ce groupe de neurones, dans une région limitée du cerveau, et provoquer alors ce que l’on appelle une crise épileptique partielle. Elle peut également se propager très rapidement à l’ensemble des régions cérébrales. On parle alors de généralisation secondaire de la crise. Dans d’autres cas, la décharge concerne la majorité des neurones dés son origine, réalisant lors ce qu’on appelle une crise généralisée d’emblée.
      </p>
      <p>
        La maladie épileptique se caractérise par la répétition des crises. Elle nécessitera alors un traitement de protection au long cours. Une crise isolée n’est souvent qu’un accident de parcours, en particulier chez le sujet jeune, qui n’a pas de gravité particulière pour l’avenir, et un traitement à ce stade n’est souvent pas nécessaire.
      </p>
      <h4><strong>Manifestations des crises d’épilepsie </strong></h4>
      <p>
        Contrairement à une idée reçue, les crises d’épilepsie ne s’accompagnent pas toujours de mouvements saccadés, de convulsions ou d’yeux révulsés. Elles peuvent en effet être moins spectaculaires et se manifester par des hallucinations (olfactives, visuelles, auditives), des impressions de « déjà vu » ou « déjà vécu », par une rupture de contact (regard fixe, suspension de la parole) ou encore une perte de connaissance brutale.
      </p>
      <p>
        La présence d’une confusion de quelques minutes à dizaines de minutes après l’épisode aigu est caractéristique.
      </p>
      <p>
        En réalité, les crises d’épilepsie peuvent varier considérablement en fonction de la cause, l’âge de début, la localisation du foyer de décharge électrique, la généralisation, etc… Ainsi, il vaut mieux parler des épilepsies que d’une seule maladie épileptique.
      </p>
      <h4><strong>Causes des épilepsies</strong></h4>
      <p>
        Elles sont très nombreuses et vont des anomalies cérébrales au cours du développement fœtal aux conséquences des traumatismes crâniens, en passant par les tumeurs, les accidents vasculaires cérébraux, certaines intoxications.
      </p>
      <p>
        Dans de nombreux cas (environ 60% de l’ensemble des épilepsies), la cause d’une épilepsie reste mystérieuse, en particulier lorsque les crises sont d’emblée généralisée. Il peut exister, alors, une susceptibilité familiale.
      </p>
      <p>
        Les lésions à l’origine de crises épileptiques peuvent se situer sur l’ensemble de la surface du cerveau (cortex). Néanmoins, le lobe temporal est plus souvent concerné que les autres régions.
      </p>
      <a class="tabtest"><img src="/images/neuro%205.png"></a>
      <p>
        En France, l’intoxication alcoolique est une cause particulièrement fréquente de crises épileptiques. Il existe d’autres facteurs favorisants les crises épileptiques tels que la privation de sommeil, la prise de toxiques (drogues), une anomalie biologique, ou encore le sevrage de certains médicaments (arrêt brutal de somnifères, par exemple).
      </p>
      <h4><strong>Diagnostic de l’épilepsie</strong></h4>
      <p>
        Ce diagnostic peut être difficile compte tenu de la variété des crises épileptiques et du caractère transitoire des manifestations. Il repose sur :
      </p>
      <ul>
        <li>L’interrogatoire, toujours très important. Il est souvent nécessaire que le médecin puisse interroger les témoins d’une crise, qui pourront donner des informations plus précises que la personne elle-même.</li>
        <li>L’électroencéphalogramme (EEG) qui enregistre l’activité électrique du cerveau et peut aider au diagnostic après la survenue de la crise.</li>
        <li>L’imagerie cérébrale (IRM surtout), qui permet de rechercher la ou les zones du cerveau lésées, qui peuvent être responsables des crises épileptiques. Dans certains cas, d’autres techniques (tomographie par émission de positons par exemple) permettent de repérer une région épileptique en analysant les troubles du flux sanguin et du métabolisme dans le cerveau Bénéficiant des nouvelles techniques d’imagerie médicale, la recherche sur l’épilepsie a fait d’importants progrès au cours des dernières années.</li>
      </ul>
      <h4><strong>Les traitements de l’épilepsie</strong></h4>
      <p>
        Le célèbre Hippocrate utilisait la pivoine pour traiter l’épilepsie… Aujourd’hui, on dispose d’une vaste gamme de médicaments antiépileptiques, adaptés aux différents types d’épilepsie. Le choix du médicament dépend du type de crises, et de la tolérance au traitement. La prise d’un médicament antiépileptique permet de faire cesser complètement les crises chez la majorité des patients. Si ce n’est pas le cas, elle peut au moins en réduire le nombre et l’intensité. Une bonne observance du traitement est indispensable.
      </p>
      <p>
        Pur les patients qui continuent à présenter des crises malgré les médicaments antiépileptiques, même prescrits en association entre eux (patients « pharmaco-résistants »), une chirurgie peut être envisagée si l’épilepsie représente un grave handicap. Cette chirurgie se décide au terme d’un bilan qui vise à préciser la zone du cortex cérébral à l’origine des crises, zone qui fera l’objet d’une ablation neurochirurgicale. Des techniques de traitement plus récentes ont été développées telles que la stimulation intermittente du nerf vague (impulsions électriques délivrées sur un nerf au niveau du cou, dont l’effet est transmis aux régions cérébrales).
      </p>
      <p>
        Quelques conseils pour conclure…
      </p>
      <p>
        Si l’on est porteur d’une épilepsie, voici quelques mesures préventives utiles :
      </p>
      <ul>
        <li>Prendre ses médicaments en respectant bien la posologie.</li>
        <li>Dormir suffisamment et conserver autant que possible un cycle régulier de sommeil.</li>
        <li>Avoir une alimentation équilibrée (l’hypoglycémie peut déclencher des crises)</li>
        <li>Ne pas prendre de drogues, réduire sa consommation d’alcool, éliminer les stimulants : tabac, café, thé, boissons contenant de la caféine (cola, boissons énergisantes), chocolat.</li>
        <li>Eviter les sources lumineuses clignotantes (au moins pour certains types d’épilepsie).</li>
      </ul>
      <h3><strong>AVC ischémique ou Infarctus cérébral</strong></h3>
      <h5>
        INFARCTUS CÉRÉBRAL OU AVC ISCHÉMIQUE
      </h5>
      <p>
        Les infarctus cérébraux, ou accidents ischémiques cérébraux, représentent 80 % de l’ensemble des AVC et sont dus à l’occlusion d’une artère cérébrale par un caillot. Leur prise en charge a considérablement évolué depuis quelques années. Outre la prise en charge hospitalière spécialisée (en unité neurovasculaire), qui profite à tous les types d’AVC, des traitements spécifiques de l’infarctus cérébral ont fait la preuve de leur efficacité lorsqu’ils sont appliqués de manière extrêmement rapide. Il faut donc réagir dès les premiers signes en appelant le 15 (SAMU) ou les Pompiers, qui pourront amener la personne sans perdre de temps vers une unité spécialisée. Ces signes dépendent de la région du cerveau irriguée par l’artère bouchée. Il s’agit le plus souvent de l’un des suivants :
      </p>
      <ul>
        <li>Paralysie d’un coté du corps (hémiplégie), parfois prédominant au visage et au membre supérieur.</li>
        <li>Perte de la sensibilité d’un coté du corps (« engourdissement »)</li>
        <li>Troubles du langage (on parle d’aphasie)</li>
        <li>Trouble de la coordination d’un bras, trouble de l’équilibre, trouble de la vision d’un coté Dans tous les cas ces symptômes apparaissent de manière brutale, et c’est cette brutalité qui doit faire évoquer l’accident vasculaire cérébral et tout particulièrement l’infarctus cérébral. Une fois la personne arrivée à l’hôpital, une imagerie cérébrale (scanner ou IRM) est réalisée le plus vite possible, permettant de distinguer l’hémorragie cérébrale de l’infarctus. Si l’AVC est un infarctus, le principal traitement d’urgence vise à déboucher l’artère grâce à une thrombolyse, c’est à dire la perfusion intraveineuse en une heure d’un produit ayant la capacité de dissoudre le caillot. Ce traitement n’est possible que dans les premières heures après le début des symptômes (4 heures 30 pour la perfusion intraveineuse, jusqu’à 6 heures parfois grâce à un cathéter par voie intra artérielle). L’heure de début du compte à rebours correspond à la dernière fois où le patient a été vu normal. Plus la thrombolyse est effectuée rapidement, plus l’efficacité du traitement croît. Dans la mesure où chaque minute compte, les unités spécialisées sont organisées avec les SAMU et pompiers, avec les services d’urgences et de radiologie de leur hôpital, pour que la prise en charge ne souffre aucun retard. Tout patient victime d’un infarctus cérébral ne peut cependant pas être traité par thrombolyse, car il existe des risques d’hémorragie cérébrale due au médicament, qui ne peut donc être prescrit que dans un cadre très précis. De nombreux critères doivent être rempli : le délai en est le principal (voir plus haut), mais d’autres sont importants tels que l’âge, les antécédents du sujet, ses traitements, etc … Dans 20 à 25% des cas, l’infarctus cérébral a été précédé d’un AIT, c’est-à-dire de symptômes transitoires, malheureusement souvent négligés par méconnaissance. Les causes des infarctus cérébraux sont nombreuses. Elles sont dominées par :</li>
      </ul>
      <ul>
        <li>L’athérosclérose, c’est-à-dire l’encrassement des artères consécutif à l’âge, fortement favorisé par des facteurs de risque vasculaire : le principal pour les artères destinées au cerveau est l’hypertension artérielle, suivi du tabac, puis du diabète et d’un taux trop élevé de cholestérol.</li>
        <li>Les maladies du coeur dites emboligènes (c’est-à-dire susceptible de former des caillots à l’intérieur des cavités cardiaques) : la plus fréquente est la fibrillation auriculaire, maladie très fréquente du sujet âgé (près de 10 % de la population de plus de 80 ans). Les maladies des valves cardiaques (valve mécanique notamment) sont une autre cause d’infarctus cérébral.</li>
        <li>La maladie des petites artères cérébrales responsable de « lacunes », c’est-à-dire de petits infarctus dans la profondeur du cerveau, liée à la présence d’hypertension artérielle et de diabète.</li>
        <li>Chez le sujet jeune, il existe quelques causes particulières. La plus fréquente est la dissection des artères du cou destinées au cerveau (artère carotide et vertébrale) : il s’agit d’une petite déchirure de la paroi interne de l’artère Une fois passée la phase aigue, la personne qui garde des séquelles de son infarctus cérébral va recevoir une rééducation adaptée, pour en minimiser les conséquences dans la vie quotidienne. Parallèlement, les médecins mettent en place des mesures de prévention pour éviter qu’un nouvel infarctus cérébral (mais aussi un infarctus du myocarde) ne survienne. Ces traitements consistent en :</li>
      </ul>
      <ul>
        <li>La lutte contre les facteurs de risque vasculaire : l’arrêt du tabac et la diminution du niveau de la pression artérielle sont les deux mesures principales.</li>
        <li>L’adaptation d’un traitement anti-thrombotique (c’est-à-dire, qui fluidifie le sang) : il s’agit de médicaments dits antiplaquettaires ou anticoagulants, selon les cas.</li>
        <li>L’application de certaines mesures plus spécifiques telles que l’opération d’une artère carotide de calibre très réduit : cette chirurgie visant à redonner à l’artère un calibre normal est appelée endartériectomie.</li>
      </ul>
      <img src="/images/neuro8.jpg">
      <h3><strong>Hémorragie cérébrale</strong></h3>
      <p>
        L’hémorragie cérébrale est un saignement qui survient de façon brutale, par rupture d’un petit vaisseau, réalisant un hématome à l’intérieur même du cerveau. Dans la plupart des cas, il existe une céphalée violente, parfois accompagnée de vomissements. Les autres symptômes dépendent de la localisation de l’hématome dans le cerveau. Les principaux peuvent être :
      </p>
      <ul>
        <li>Paralysie d’un côté du corps (hémiplégie)</li>
        <li>Troubles de la sensibilité d’un côté du corps.</li>
        <li>Troubles de la coordination et maladresse des gestes d’un côté du corps</li>
        <li>Troubles du langage (aphasie)</li>
        <li>Vertiges</li>
        <li>Troubles de la vision Dans tous les cas, l’hémorragie cérébrale nécessite une prise en charge d’urgence. L’objectif du traitement est centré sur un contrôle strict de la tension artérielle et une surveillance neurologique rapprochée, pour éviter toute complication. Une rééducation est débutée le plus vite possible kinésithérapie, orthophonie). Il arrive que la taille et la localisation de l’hématome intracérébral soient responsables de troubles de la conscience voire d’un coma. Une prise en charge en réanimation peut alors être nécessaire. Exceptionnellement, il peut s’avérer nécessaire d’opérer l’hématome pour l’évacuer. La cause la plus fréquente de l’hémorragie cérébrale est une hausse brutale de la tension artérielle, en général lorsqu’on est porteur d’une hypertension artérielle chronique. Cette complication grave est l’une des raisons pour laquelle un suivi régulier et un contrôle de la tension artérielle est nécessaire chez toute personne hypertendue. Plus rarement, une hémorragie cérébrale peut révéler une malformation des vaisseaux (artères et/ou veines) du cerveau. Le pronostic de l’hémorragie cérébrale dépendra de la taille de l’hématome, de l’âge du patient et de son état général antérieur. Passée la phase aiguë, une rééducation doit se poursuivre, souvent de manière prolongée.</li>
      </ul>
      <h5>
        <strong>Rupture artérielle, à l’origine d’un hématome intracérébral</strong>
      </h5>
      <img src="/images/neuro6.jpg">
      <h5>
        <strong>Hématome intracérébral visible au scanner</strong>
      </h5>
      <img src="/images/neuro7.jpg">
    </div>
  </div>
</p>
</div>
</div>
<!-- /.container -->
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