<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Médecine préventive</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/medecinepreventive.css') }}">
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
            <img src="/images/medecinepreventive.png">
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
                      <li><a href="/medecinepreventive"class="colorsidedropdown"style="color:red;">►Médecine préventive</a></li>
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
    <div class="col-sm-9">
      <!-- Tab links -->
      <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Epidémiologie')"id="defaultOpen"><strong>Epidémiologie</strong></button>
        <button class="tablinks" onclick="openTab(event, 'Missions')"><strong>Missions</strong></button>
        <button class="tablinks" onclick="openTab(event, 'Unité de surveillance')"><strong>U. de surveillance</strong></button>
        <button class="tablinks" onclick="openTab(event, 'Unité d_information sanitaire')"><strong>U. d'information sanitaire</strong></button>
        <button class="tablinks" onclick="openTab(event, 'Unité d_Hygiène hospitalière')"><strong>U. d'Hygiène hospitalière</strong></button>
      </div>
      <!-- Tab content -->
      <div id="Epidémiologie" class="tabcontent">
        <p>
          Un service d'Épidémiologie et de Médecine Préventive (SEMEP) à l'Établissement Hospitalier Universitaire (EHU) d’Oran que peut-il apporter aux patients hospitalisés et à la communauté hospitalière : médecins, paramédicaux, et administratifs ?Expliquons d'abord ce que c’est l'Épidémiologie. C'est une discipline médicale comme la pédiatrie, la gastro-entérologie, la Pneumo-phtisiologie, la Chirurgie et ses spécialités, les disciplines biotechnologiques, comme l’imagerie diagnostique et interventionnelle ou la biologie avec ses vastes applications des plus anciennes, la bactériologie, aux plus récentes la biologie moléculaire, l’immunologie et la génétique.
        </p>
        <p>
          L’Épidémiologie, traite des facteurs qui interviennent dans l'apparition (favorise.) ou non (protège) des phénomènes de santé chez les individus ou les populations. Elle travaille en étroite collaboration avec toutes les disciplines intervenant dans la santé publique, c'est-à-dire les aspects de politique de santé, de financement et de promotion de la santé des populations contre les risques sanitaires.
        </p>
        <p>
          Elle s’occupe également de la préservation de la santé des individus qui vivent des épisodes et des expériences de maladies chroniques. Dans ce cas, elle étudie les facteurs pronostiques liés à l’évolution de leur maladie, mais aussi les méthodes d’optimisation et de rationalisation pour amélioration continue de la qualité des soins.
        </p>
        <p>
          Il ne s’agit nullement de rationner les soins, mais d’apporter les preuves scientifiques de la supériorité des protocoles de soins utilisés, c’est l’Évidence – Based – Médecine (EBM), ou médecine basée sur les preuves, un des critères utilisés dans la certification des structures de santé. À ce titre, les avancées méthodologiques de la « décision médicale », en tant qu’ensemble d’outils et de méthodes, sont parmi les techniques les plus appréciées par les professionnels, car elles partent de leurs préoccupations, tiennent compte et incorporent leur avis dans le processus décisionnel.
        </p>
        <p>
          Enfin, l’Épidémiologie est une discipline qui permet d’explorer les situations et les conditions liées à la santé des individus et des populations, d’analyser les facteurs et d’aider les preneurs de décision. Pour ce faire, elle fait partie des ressources permettant à l’EHU d’affronter et de se positionner, dans un environnement de plus en plus concurrentiel, en tant détenteur de compétences distinctives et à forte valeur ajoutée.
        </p>
        <p>
          Demain, nous devons produire les soins les plus qualitatifs et les moins chers du « marché », si l’on ne veut plus se contenter des seules subventions de l’Etat, qui, rappelons-le, sera moins généreux que par le passé, et agir en tant qu’« instrument de mise en œuvre de la politique nationale de santé dans le domaine des soins de haut niveau et de la politique nationale de formation supérieure et de recherche médicale » [article 4 du Décret présidentiel 03 - 270 portant création, organisation et fonctionnement de l’EHU Oran].
        </p>
        <p>
          En somme, l’environnement exige de nous comporter en véritable « pôle d’excellence » dans les soins de santé de haut niveau.
        </p>
        <h4>Que peut donc apporter un SEMEP hospitalier ?</h4>
        <p>
          Il intervient dans l'amélioration de la qualité des soins en prévenant l'apparition des infections acquises à l'hôpital, donc les complications pour le patient, les surcoûts induits par des consommations de ressources supplémentaires (traitement, séjour allongé…).
        </p>
        <p>
          De la même manière, il intervient dans l'amélioration des conditions de travail (hygiène, sécurité sanitaire) des soignants (médecins, paramédicaux) et agents de service pour prévenir les maladies pouvant être contractées dans l'exercice de leur fonction.
        </p>
        <p>
          La prévention des maladies surajoutées pour les patients et les maladies professionnelles pour les soignants est un des moyens de réduire la non-qualité.
        </p>
        <p>
          La pratique médicale évolue jour après jour, elle est très liée à la production scientifique de plus en plus prolifique. Rationalisation de la décision, recherche d'efficacité, choix de protocoles, évaluation des pratiques… Autant de domaines, qui appartiennent à l'Épidémiologie clinique, qui peuvent être développés en collaboration avec l’ensemble des services. Aujourd’hui, la médecine se construit et se développe dans l’interdisciplinarité et dans le consensus. La connaissance absolue n’existe plus, elle a une durée de vie de plus en plus courte, elle est temporo-labile.
        </p>
        <p>
          L'information, ressource importante dans toute organisation, est un moyen de rapprocher l'ensemble des opérateurs aussi bien à l'intérieur de l'hôpital qu'à l'extérieur. L'information sur le fonctionnement d'abord nécessaire aux services, à l'administration, aux patients…
        </p>
        <p>
          Construisons ensemble notre système d’information à même de nous aider dans les prises de décision, médicale ou gestionnaire. Aidons les services, médicaux et administratifs, à produire des données de bonne qualité, et utilisons localement les informations analysées pour permettre aux deux conseils scientifiques et d’administration de faire les bons choix.
        </p>
        <p>
          Nous avons la chance d’évoluer dans un établissement doté d’infrastructures de haut niveau. Très prochainement le réseau Intranet santé sera fonctionnel, ce qui permettra d’amplifier et d’accélérer les flux d’échanges et gagner un temps très appréciable.
        </p>
        <p>
          Le Système d'information est donc un des axes privilégiés de notre action.
        </p>
        <p>
          Aujourd'hui, le financement des établissements de santé constitue un des points faibles du système de santé dans notre pays. Les retombées de la crise économique et le réajustement structurel ont retenti négativement sur les structures publiques de santé en réduisant nettement leur budget.
        </p>
        <p>
          Fonctionner de la manière la plus économique et sans altérer la qualité des soins constitue pour nous un choix clair.
        </p>
        <p>
          Les études d’analyses des coûts constituent une manière de faire face à la rareté des ressources et d’être plus le coût-efficace et plus coût-efficient. Les économies seront investies dans les actions qui n’avaient pas trouvé de financement.
        </p>
      </div>
      <div id="Missions" class="tabcontent">
        <h2>FORMATION</h2>
        <h4>L'enseignement  dans un cadre universitaire :</h4>
        <ol>
          <li>
            <strong><a>Etudiants de graduation : </a></strong>
            Modules de médecine sociale et d’Economie de la santé.
            <li>
              <strong><a>Etudiants de Post-graduation en épidémiologie : </a></strong>
              <ul>
                <li>
                  <strong><a>Pour les résidents d’épidémiologie</a></strong>
                  <p>
                    où la durée de formation de base est de  3 années, suivie d’une année optionnelle où le candidat doit choisir les Biostatistiques, la Santé publique  ou l’Environnement. Au terme de la 4ème année le candidat doit préparer un mémoire validant  qu’il doit présenter au terme de la dernière année de formation avant de se présenter au DEMS.
                  </p>
                  <p>
                    Les programmes ont pour objectif d’assurer une formation en méthodologie statistique,  en méthodologie épidémiologique ainsi que  les conduites à tenir devant des situations épidémiques. Une large  partie du programme est réservée à l’épidémiologie des maladies non transmissibles soumises à des programmes nationaux  de lutte.
                  </p>
                </li>
                <li>
                  <strong><a>Pour les résidents de chirurgie</a></strong>
                  <p>
                    en dernière année de leur cursus,  une formation de base sur l’épidémiologie descriptive et analytique est destinée (6 conférences avec travaux dirigés).
                  </p>
                </li>
                <li>Dans le cadre de l’activité hebdomadaire du service : </li>
                <ul>
                  <li>Lecture critique d’un article médical avec application des grilles d’évaluations spécifiques.</li>
                  <li>Séances sur la revue de la littérature.</li>
                </ul>
                <li>Séminaire sur la Formation au logiciel Epi Info pour l’analyse descriptive des données sanitaires (médecins et paramédicaux)</li>
                <li>Séminaire de Formation au logiciel statistique de traitement de l’information sanitaire (médecins).</li>
                <li>Séminaire de Formation au de recueil au codage des données sur le cancer (Médecins).</li>
                <li>Séminaire Formation au codage des données médico-sanitaires et utilisation des classification en santé (médecins et paramédicaux)</li>
                <li>Participation à la formation continue (Cours, CES, séminaires …)</li>
                <li>Encadrement de thèses et de mémoires.</li>
                <li>Appui à des projets de formation de personnel de santé, de recherche appliquée en matière de santé, de développement sanitaire dans les pays en développement.</li>
                <li>La mission de formation du SEMEP recouvre largement le domaine de l'épidémiologie  à l'évaluation clinique, la mission de service principale est orientée vers le développement de stratégies visant à l'adaptation, au développement, à la diffusion, et à la mise en œuvre de recommandations pour la pratique clinique comme outil d'aide à la décision médicale et à l'amélioration de la qualité des soins, en collaboration avec les Services cliniques qui en font la demande.</li>
              </ul>
            </li>
          </ol>
          <h2>RECHERCHE</h2>
          <ul>
            <li>Promouvoir et développer la recherche scientifique consacrée aux services de santé, et de favoriser l’intégration de ses résultats dans les décisions de politique sanitaire.</li>
            <li>Développer des travaux de recherche relatifs à l’évaluation, l’élaboration, l’adaptation, la diffusion et la mise en œuvre des recommandations pour la pratique clinique.</li>
            <li>La recherche et le développement se centrent sur l’adéquation des soins ainsi que sur des questions méthodologiques liées aux principes cliniques et les indicateurs de qualité pour les soins.  </li>
            <li>Soutien dans le recueil des données, traitement informatique, analyse statistique de données et documentation.</li>
            <li>Conseils, soutiens et accompagnements méthodologiques des équipes à la Recherche Clinique et Épidémiologique.</li>
            <li>
              Consultations ponctuelles de méthodologie de recherche clinique et d’épidémiologie : 
              <ul>
                <li>Clarification des questions posées.</li>
                <li>Rédaction de protocoles et des questionnaires.</li>
              </ul>
            </li>
            <li>Aide à l’élaboration des protocoles de recherche dans le domaine des infections nosocomiales.</li>
            <li>Développer l ‘épidémiologie clinique pour les prises de décision.</li>
            <li>Appui à des projets de recherche clinique et épidémiologie d'intervention.</li>
            <li>Contribuer à la qualité des projets de recherche clinique et de recherche fondamentale.</li>
            <li>Le Recherche Clinique : la recherche orientée vers le patient, la recherche épidémiologique, l'évaluation des résultats et de l'impact des soins et services de santé. Dans le domaine de la recherche orientée vers le patient, SEMEP offre des services et participe à la conception d'études cliniques mises en œuvre par d'autres équipes, à la collecte des données, à l’analyse statistique et épidémiologique et à la publication des résultats de ces études. Dans le domaine de la recherche épidémiologique, le SEMEP met en œuvre ou participe à des travaux originaux sur la détection précoce du risque cardiovasculaire, contrôle des maladies infectieuses, malnutrition et carences nutritionnelles, santé et environnement.</li>
            <li>Dans le domaine de la recherche orientée vers les résultats des soins de santé, le SEMEP aborde le thème concernant la  Médecine Basée sur des Preuves, prévention en médecine, la santé maternelle et infantile …</li>
          </ul>
        </div>
        <div id="Unité de surveillance" class="tabcontent">
          <h3>Unité de surveillance</h3>
          <p>
            Pour assurer convenablement ses missions, le service d’épidémiologie et de Médecine Préventive est soutenu par 3 Unités dont les activités et missions se résument comme suit :
          </p>
          <ul>
            <li>Unité surveillance et contrôle épidémiologique.</li>
            <li>Unité Information  Sanitaire et traitement de l’information.</li>
            <li>Unité Hygiène Hospitalière.</li>
          </ul>
          <h2>Unité surveillance et contrôle épidémiologique</h2>
          <h4>Mettre en place du système de déclaration des MDO</h4>
          <ul>
            <li>Réaliser des enquêtes épidémiologiques en rapport avec les Maladies à Déclaration Obligatoire.</li>
            <li>Participer à investiguer les épidémies communautaires.</li>
            <li>Mettre en place coordonner et des investigations menées en urgence dans le contexte d’une alerte sanitaire.Surveillance et lutte contre les maladies chroniques prévalentes non transmissibles (Diabète, Hypertension, cardiopathies rhumatismales cancers …)Mesurer la fréquence et l’incidence des principales affections et de la quantification de leurs facteurs de risque connus.</li>
            <li>Participations aux programmes nationaux de lutte : Evaluation des programmes de prévention et des politiques de la santé, dans la recherche liée à la santé publique notamment dans le domaine HIV/SIDA, et les autres maladies soumises aux programmes nationaux.</li>
            <li>Renforcer la place de la prévention des maladies et de la promotion de la santé dans le système de santé.</li>
            <li>Etablir un bulletin mensuel  et/ou trimestriel sur les maladies à déclaration obligatoire à diffuser  à toutes les structures dans le cadre de  la rétro information.</li>
          </ul>
          <h4>Vaccination</h4>
          <ul>
            <li>Approvisionnement en vaccin HvB, Tétanos, gestion des stocks.</li>
            <li>Conseil et vaccination des voyageurs et risques spécifiques.</li>
            <li>Vaccination des malades, gardes-malades : sur prescription (HvB, DT, anti-hæmophilus, anti-pneumococcique, anti-méningococcique…)</li>
            <li>Étude de l’efficacité de la vaccination : titrage et séro-conversion par exemple.</li>
          </ul>
          <h4>Autres Programmes Nationaux de santé</h4>
          <ul>
            <li>Collecte de l’information des programmes IRA, LMD, Polio (PFA), Périnatalité, UMC …</li>
            <li>Sensibilisation et information des personnels de l’EHS.</li>
          </ul>
          <h4>Epidémiologie d’intervention </h4>
          <ul>
            <li>Epidémies communautaires.</li>
            <li>Urgences épidémiques : grippe aviaire, etc...</li>
            <h5>
              Autres activités sont intégrés dans cette unité : 
            </h5>
            <p>
              <strong>Surveillance épidémiologique des Maladies à Déclaration Obligatoire (MDO)</strong>
            </p>
            <ul>
              <li>Codage selon la CIM10.</li>
              <li>Saisie  et analyse sur EPI6Fr.</li>
              <li>Rédaction de la lettre épidémiologique trimestrielle.</li>
              <li>Création du bulletin épidémiologique de l’EHU Oran.</li>
            </ul>
            <p>
              <strong>Supervision du Programme National d’Eradication de la Poliomyélite</strong>
            </p>
            <ul>
              <li>Au niveau de l’EHU Oran.</li>
              <li>Superviseur au niveau wilaya</li>
            </ul>
          </ul>
          <h2>Les projets de recherche intégrés</h2>
          <h4>Projet de recherche : « Les tumeurs malignes chez l’enfant »</h4>
          <ul>
            <li>Rédaction du projet de recherche.</li>
            <li>Enquête  rétrospective  portant sur tous les cas de cancers diagnostiqués au niveau du CEA Misserguine Oran : Ce travail entre dans le cadre de l’étape préliminaire pour la création d’un registre des hémopathies malignes chez l’enfant.</li>
            <li>Codage des cas selon la CIMO3.</li>
            <li>Saisie et analyse des données.</li>
            <li>Rédaction du rapport final du projet.</li>
          </ul>
          <h4>Projet de recherche :  « Etude des facteurs de risque et prévention du cancer du sein chez la femme »</h4>
          <ul>
            <li>
              Etude  portant sur tous les cas de cancer du sein diagnostiqués au niveau des services concernés :
              <ul>
                <li>Service de gynéco-obstétrique CHU et EHU Oran.</li>
                <li>Service d’oncologie médicale CHU.</li>
                <li>Service de radiothérapie CHU.</li>
                <li>Service de radiologie CHU.</li>
              </ul>
            </li>
            <li>Supervision et collecte prospective des cas incidents selon la fiche technique.</li>
            <li>Codage des cas selon la CIMO3.</li>
            <li>Saisie et analyse des données.</li>
            <li>Rédaction du rapport.</li>
          </ul>
        </ul>
      </div>
      <div id="Unité d_information sanitaire" class="tabcontent">
        <strong><h2>Unité Information  Sanitaire et traitement de l’information</h2></strong>
        <ul>
          <li>Participe à la mise ne place pas d’un système d’information sanitaire avec l’utilisation des normes codées et classification.</li>
          <li>Collecte, traitement et diffusion des informations sanitaires hospitalières et extra-hospitalières : information sanitaire.</li>
          <li>Collecte des informations relatives à l’hygiène du milieu extra-hospitalier.</li>
          <li>Mise en place d’un réseau interne d’information et de communication électronique (INTRANET) : rétro information et diffusion des informations de la surveillance. </li>
          <li>Développer des systèmes d'informations, permettant notamment de mesurer la fréquence et le volume des soins consommés par les patients. </li>
          <li>Développer et appliquer des instruments permettant de surveiller et de promouvoir la qualité des soins hospitaliers pour assurer des soins de qualité.</li>
          <li>Développer des Registre de Morbidité : registre du cancer : enregistrement et surveillance du cancer d’un point de vue épidémiologique, au niveau local et dans l’évaluation des facteurs de risque ainsi que l’évaluation des tendances des cancers les plus fréquents.</li>
          <li>Réaliser l’analyse périodique des données de surveillance épidémiologique recueillies ou reçues.</li>
        </ul>
        <h3>Système d’information</h3>
        <h4>Missions principales</h4>
        <ul>
          <li>Validation.</li>
          <li>Traitement et analyse.</li>
          <li>Communication  (retro-information)</li>
        </ul>
        <h4>Domaines</h4>
        <ul>
          <li>Morbidité : Résumé de Sortie (instruction ministérielle 2002)</li>
          <li>Mortalité : certificat de décès</li>
          <li>Réactivité : satisfaction des patients (questionnaire de sortie)</li>
        </ul>
        <h4>Actions</h4>
        <ul>
          <li>Formation des personnels.</li>
          <li>Gestion  des bases de données.</li>
        </ul>
        <h3>Information Médico-Economique</h3>
        <h4>Sensibilisation</h4>
        <ul>
          <li>Des médecins-chefs.</li>
          <li>Autres acteurs</li>
        </ul>
        <h4>Etude du case-mix</h4>
        <ul>
          <li>Validation.</li>
          <li>Traitement des données.</li>
          <li>Analyse des données.</li>
          <li>Rendu des résultats, rédaction de rapport.</li>
        </ul>
        <h4>Autonomie des services dans l’évaluation médico-économique</h4>
        <ul>
          <li>Formation au codage.</li>
          <li>Identifier le « Référant » case-mix pour former le binôme  Service-SEMEP.</li>
          <li>Accompagnement progressif des services pour la collecte, codage, et saisie des données.</li>
          <li>Analyse des données</li>
        </ul>
        <h4>Mise en place de bases de données</h4>
        <ul>
          <li>Morbidité hospitalière.</li>
          <li>Mortalité hospitalière.</li>
        </ul>
        <h4>Valorisation des résultats</h4>
        <ul>
          <li>Communications, publications.</li>
        </ul>
        <h3>Dossier médical</h3>
        <h4>Audit qualité</h4>
        <ul>
          <li>Sensibilisation et implications des services volontaires à la démarche qualité.</li>
          <li>Réalisation de l’audit.</li>
          <li>Etude Avant – Après.</li>
        </ul>
        <h4>Atelier Dossier Médical</h4>
        <ul>
          <li>Proposition de modèles.</li>
          <li>Consensus modèle EHU.</li>
          <li>Elaboration de procédures archivage / normalisation.</li>
        </ul>
        <h3>Etude de la satisfaction des patients</h3>
        <h4>Enquête Satisfaction</h4>
        <ul>
          <li>Elaboration du protocole.</li>
          <li>Mise en œuvre.</li>
        </ul>
      </div>
      <div id="Unité d_Hygiène hospitalière" class="tabcontent">
        <h3>Unité d'Hygiène hospitalière</h3>
        <ul>
          <li>Contrôle des normes d’hygiène hospitalière.</li>
          <li>Prévention et gestion des risques hospitaliers.</li>
          <li>Surveillance et prévention des infections nosocomiales.</li>
          <li>Surveillance et prévention des infections nosocomiales.</li>
          <li>Gestion des déchets hospitaliers sur le plan épidémiologique.</li>
          <li>Surveillance des accidents exposant au sang : la surveillance permet une récolte de données standardisée dans l'intention de diminuer le nombre d'accidents exposant au sang.</li>
          <li>Elaborer des protocoles de recherche dans le domaine des infections nosocomiales.</li>
          <li>Réaliser une analyse périodique des données de surveillance épidémiologique recueillies ou reçues des infections nosocomiales.</li>
        </ul>
        <h3>Gestion du risque infectieux nosocomial</h3>
        <h4>Investigation des épidémies</h4>
        <p>
          Système de surveillance des IN : mise en place
        </p>
        <ul>
          <li>Partenaires : services volontaires, labo, pharmacie.</li>
          <li>Outils : déclaration, fiche d’enquête, enquête.</li>
        </ul>
        <h4>Lavage des mains :</h4>
        <ul>
          <li>Audit</li>
        </ul>
        <h4>Stérilisation</h4>
        <ul>
          <li>Contrôle de l’eau de javel (CAQUE)</li>
          <li>Etablissement de la liste des désinfectants.</li>
          <li>
            Rédaction des fiches techniques (tous matériels, labo/services) :
            <ul>
              <li>Méthode, désinfectant, rythme, responsable.</li>
              <li>Registres de stérilisation.</li>
              <li>Contrôle de la stérilisation.</li>
              <li>Evaluation.</li>
            </ul>
          </li>
        </ul>
        <h4>Protocoles de surveillance spécialisés </h4>
        <ul>
          <li>Services : réanimation, néphro, CTS.</li>
          <li>Réflexion conjointe.</li>
          <li>Rédaction de protocoles.</li>
          <li>Rédaction des procédures.</li>
        </ul>
        <h4>Zoning </h4>
        <ul>
          <li>Suivi, mise en place.</li>
        </ul>
        <h4>CLIN</h4>
        <ul>
          <li>Pilotage du CLIN</li>
        </ul>
        <h3>Surveillance de l’eau</h3>
        <h4>Analyse de l’eau </h4>
        <ul>
          <li>Chlorométrie </li>
          <ul>
            <li>Points d’eau : bâches, eau de ville.</li>
          </ul>
        </ul>
        <ul>
          <li>Bactériologie</li>
          <ul>
            <li>Bâches, eau de ville, hémodialyse, points non chlorés.</li>
          </ul>
        </ul>
        <ul>
          <li>Analyse physico-chimique</li>
          <ul>
            <li>Point : Hémodialyse.</li>
          </ul>
        </ul>
        <ul>
          <li>Identification des points d’eau non potable</li>
          <h4>Traitement de l’eau</h4>
          <ul>
            <li>Javellisateurs.</li>
            <li>Mise en place.</li>
            <li>Javellisation.</li>
            <li>Contrôle nettoyage réservoir.</li>
            <li>Contrôle nettoyage et chaulage bâches.</li>
          </ul>
          <h4>Base de données de Surveillance de l’eau</h4>
          <ul>
            <li>Mise à jour, exploitation, évaluation.</li>
            <li>Réalisation du Tableau de Bord Surveillance Eau.</li>
          </ul>
          <h4>Plan réseau de l’hôpital : eau, eau usées</h4>
          <ul>
            <li>Démarches auprès des services de l’infrastructure.</li>
          </ul>
          <h3>Surveillance des eaux usées et cuisines, états des lieux, lutte contre les vecteurs</h3>
          <h4>Surveillance des eaux usées</h4>
          <ul>
            <li>Contrôle vidange et curage des fosses de décantation.</li>
          </ul>
          <h4>Surveillance des cuisines</h4>
          <ul>
            <li>Plat témoin.</li>
            <li>Inspection de la cuisine.</li>
            <li>Hygiène du personnel de cuisine</li>
            <ul>
              <li>Coordination de la surveillance avec le médecin du travail.</li>
            </ul>
            <li>Inspections à la demande.</li>
          </ul>
          <h4>Etats des lieux, lutte contre les vecteurs</h4>
          <ul>
            <li>Etat des lieux (général, services, locaux)</li>
            <li>Inspections à la demande.</li>
            <li>Elaboration du plan de dératisation et de désinsectisation.</li>
          </ul>
          <h4>Rapports d’hygiène</h4>
          <ul>
            <li>Rédaction des rapports.</li>
          </ul>
          <h3>Consultations et Vaccinations</h3>
          <ul>
            <li>Conseils et  vaccination des populations à risque (hémodialysés, immunodéprimés, pathologies pulmonaires)</li>
            <li>Conseil pour les voyageurs en zones tropicales et en période de pèlerinage.</li>
            <li>Conseil et vaccination dans le cas de blessures tétanigènes (Schéma de la vaccination anti-tétanique)</li>
            <li>Vaccination antirabique (Schéma de la vaccination antirabique)</li>
            <li>Consultation de tabacologie.</li>
            <li>Planning familial et santé reproductive.</li>
            <li>Soutien dans le recueil des données, traitement informatique, analyse statistique de données et  documentation.</li>
            <li>Conseils,  soutiens et accompagnements méthodologiques des équipes  à la Recherche Clinique et Epidémiologique.</li>
            <li>Donner des indications pour améliorer le projet dans son ensemble avec suivi :</li>
            <ol>
              <li>Elaboration d’une méthode, d’un plan d’étude, des analyses statistiques à envisager.</li>
              <li>Conseils et supervision quant à une analyse statistique.</li>
              <li>Collaboration incluant l’analyse des données.</li>
            </ol>
            <li>Consultations ponctuelles de méthodologie de recherche clinique et d’épidémiologie :</li>
            <ul>
              <li>Clarification des questions posées.</li>
              <li>Rédaction de protocoles et des questionnaires.</li>
            </ul>
            <li>Expertise et consultance en méthodes quantitatives en sciences de la santé : épidémiologie, biostatistique, méthodes opérationnelles.</li>
          </ul>
          <h3>Documents nécessaires pour assurer à bien les missions</h3>
          <h4>Les plans nécessaires</h4>
          <ul>
            <li>Cuisines.</li>
            <li>Buanderie.</li>
            <li>Stérilisation centrale.</li>
            <li>Masse par bâtiment et par étage.</li>
            <li>Installations techniques : chaufferie, climatisation, gaz médicaux, incinération.</li>
          </ul>
          <h4>Fiches techniques</h4>
          <ul>
            <li>Locaux des unités de soins.</li>
            <li>Lieux et conditions du lavage des mains.</li>
            <li>Locaux des linges propre et sale.</li>
            <li>Locaux des déchets.</li>
            <li>Salles: toilette, bains.</li>
          </ul>
        </div>
      </div>
    </div>
  </p>
</div>
</div>
<script>
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0;
     i < tabcontent.length;
     i++) {
      tabcontent[i].style.display = "none";
        
    }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0;
     i < tablinks.length;
     i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
        
    }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
      
  }
</script>
<!-- ouvrir auto the tab-->
<body onload="document.getElementById('defaultOpen').click();"><!-- /.container -->
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