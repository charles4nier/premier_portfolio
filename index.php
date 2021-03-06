<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Charles FOURNIER - Développeur Web Junior</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="css/materialize.css"> -->
  </head>
  <body>

    <header class="flexRow justifySpaceAround alignItemsCenter">
      <!-- menu normal device -->
      <h1 class="mediumDevice title flexColumn">Charles FOURNIER <strong>Développeur Web Junior - Fullstack</strong></h1>
      <nav class="mediumDevice">
        <ul class="flexRow justifySpaceAround alignItemsCenter">
          <li><a id="homeLink" class="scrollButton activeLink" href="#home">Accueil</a></li>
          <li><a id="latestWorkLink" class="scrollButton" href="#latestWork">Derniers projets</a></li>
          <li><a id="skillsLink" class="scrollButton skillsLink" href="#skills">Compétences</a></li>
          <li><a id="aboutMeLink" class="scrollButton aboutMeLink" href="#aboutMe">Moi !</a></li>
          <li><a id="contactLink" class="scrollButton contactLink" href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- menu small Device -->

      <h1 class="titleSmall">C<span class="spanBlue">4</span>nier <strong>Développeur Web Junior - Fullstack</strong></h1>
      <nav class="smallDeviceMenu">Menu
          <ul>
            <li><a id="homeLink" class="scrollButton activeLink" href="#home">Accueil</a></li>
            <li><a id="latestWorkLink" class="scrollButton" href="#latestWork">Derniers projets</a></li>
            <li><a id="skillsLink" class="scrollButton skillsLink" href="#skills">Compétences</a></li>
            <li><a id="aboutMeLink" class="scrollButton aboutMeLink" href="#aboutMe">Moi !</a></li>
            <li><a id="contactLink" class="scrollButton contactLink" href="#contact">Contact</a></li>
          </ul>
      </nav>

    </header>

    <main class="container-fluid">

      <section id="home" class="home row">
        <div class="">
          <canvas id="canvas" width="800" height="500">
          </canvas>
        </div>
      </section>

      <section id="latestWork" class="latestWork row flexRow flexWrap perfectCenter">
          <section id="1" class="fadeIn work">
            <div id="1workInfo" class="workInfo">
              <h2>Learn Eat</h2>
              <ul>
                <li><span>Conception :</span> analyse du besoin client, création de la charte graphique et réalisation d'un prototype</li>
                <li><span>Développement :</span> création du site (HTML5, Bootstrap, CSS3, JS, JQUERY, Reponsive Design) et résolution des problèmes techniques</li>
                <li><span>Mise en ligne :</span> accompagnement du client et maintenance du site</li>
              </ul>
            </div>
            <img src="links/learnEat.jpg" alt="une main et des avec une assiette de légume" class="img-responsive">
          </section>

          <section id="2" class="fadeIn work">
            <div id="2workInfo" class="workInfo">
              <h2 class="textInfo">Ik Music</h2>
              <ul class="textInfo">
                <li><span>Conception :</span> analyse du besoin client, création de la charte graphique et réalisation d'un prototype</li>
                <li><span>Développement :</span> création du site (HTML5, CSS3/SASS, JS, JQUERY) et résolution des problèmes techniques</li>
                <li><span>Mise en ligne :</span> accompagnement du client et maintenance du site</li>
              </ul>
            </div>
            <img src="links/ik.jpg" alt="des lignes d'écritures" class="img-responsive">
          </section>

          <section id="3" class="fadeIn work">
            <div id="3workInfo" class="workInfo">
              <h2>Les légumes de Cédric</h2>
              <ul>
                <li><span>Conception :</span> analyse du besoin client, création de la charte graphique et réalisation d'un prototype</li>
                <li><span>Développement :</span> création du site (HTML5, CSS3) et résolution des problèmes techniques</li>
                <li><span>Mise en ligne :</span> accompagnement du client et maintenance du site</li>
              </ul>
            </div>
            <img src="links/royco.jpg" alt="des tomates" class="img-responsive">
          </section>

           <section  id="4" class="work none">
            <div id="4workInfo" class="workInfo">
              <h2>My Blog (en cours)</h2>
              <ul>
                <li><span>Problématique :</span> création d'un blog from scratch avec une architecure MVC</li>
                <li><span>Développement :</span> dans un premier avec une création locale de fichiers (Php 7), puis migrer vers une base de données (MySQL)</li>
                <li><span>Objectif : </span> intégrer les frameworks Silex et Angular dans le projet et monter en compétence</li>
              </ul>
            </div>
            <img src="links/myBlog.jpg" alt="une main et des avec une assiette de légume" class="img-responsive">
          </section>

          <section id="5" class="work none">
            <div id="5workInfo" class="workInfo">
              <h2>ACT !</h2>
              <ul>
                <li><span>Objectif :</span> création d'un concept et mise en place d'une home page dans un laps de temps court sans JS (3jours)</li>
                <li><span>Conception :</span> méthode agile (Trello, Scrum), mise en place d'une charte graphique et maquettage (via CANVA et MOCKUP)</li>
                <li><span>Développement : </span> création de la homepage (HTML5,CSS3, Flex)</li>
              </ul>
            </div>
            <img src="links/act.jpg" alt="" class="img-responsive">
          </section>

          <section  id="6" class="work none">
             <div id="6workInfo" class="workInfo">
               <h2>Site e-commerce (en cours)</h2>
               <ul>
                 <li><span>Problématique :</span> créer un panier utilisateur from scratch</li>
                 <li><span>Résolution :</span> création d'une base de données (MySQL), d'une session utilisateur(Php 7)</li>
                 <li><span>Objectif :</span> tendre vers une architecure MVC</li>
               </ul>
             </div>
           <img src="links/ik.jpg" alt="des lignes d'écritures" class="img-responsive">
           </section>

      </section>

      <section id="skills" class="mainSection skills row flexRow perfectCenter">
        <div class="fadeIn">
          <ul>
            <li>HTML5 : <p class="w80 orange"></p></li>
            <li>Bootstrap : <p class="w60 orange"></p></li>
            <li>Css 3 : <p class="w80 orange"></p></li>
            <li>SASS : <p class="w80 orange"></p></li>
            <li>JavaScript : <p class="w60 orange"></p></li>
            <li>JQUERY : <p class="w70 orange"></p></li>
          </ul>
        </div>
        <div class="fadeIn">
          <ul>
            <li>Angular : <p class="w50 orange"></p></li>
            <li>Php 7 : <p class="w60"></p></li>
            <li>SQL : <p class="w60"></p></li>
            <li>GitHub : <p class="w60"></p></li>
            <li>Ux : <p class="w60"></p></li>
            <li>Linux : <p class="w40"></p></li>
          </ul>
        </div>
      </section>

      <section id="aboutMe" class="mainSection aboutMe row flexRow  perfectCenter">
          <section class="firstSectionAboutMe carrousel fadeInLeft">

              <h3>Expériences passées</h3>
              <ul>
                <li class="liTitle">2012 - 2016 : Négociateur immobilier
                  <ul>
                    <li>Suivi administratif : montage des dossiers, gestion des relations clients/notaires/syndic,</li>
                    <li>Négociation : estimation de la valeur des biens, organisation des visites,</li>
                    <li>Communication : photographies, publicités</li>
                  </ul>
                </li>
                <li class="liTitle">2011 - 2012 : Cofondateur de la S.A.R.L, développement de livre interactifs sur iPad
                  <ul>
                    <li>Maquette : logique interactive et ergonomique,
  arborescence des contenus,</li>
                    <li>Pilotage des projets : planning, assurance qualité,
  gestion de l'équipe, business plan,</li>
                    <li>Production : création et intégration des contenus</li>
                  </ul>
                </li>
              </ul>

          </section>

          <section class="lastChildSectionAboutMe fadeInRight">
            <h3>Profil</h3>
            <p>Je suis passionné par le web et le développement. Pugnace, motivé, autonome et sociable, je suis en recherche de stage et souhaite intégrer à terme une entreprise en tant que développeur. </p> <p>Actuellement en formation développeur web fullstack JS/PHP, j'affectionne particulièrement le développement front. Néanmoins j'ai choisi une spécialité PHP afin de découvrir tous les apsects du métier et mieux comprendre les problématiques du développement.</p>
          </section>
      </section>

      <section id="contact" class="mainSection contact row perfectCenter flexColumn mainSection">
        <!-- Le carré noir dans le fond de la section -->
        <div class="blackContainer">
          <!-- Le conteneur bleu turquoise qui reçoit également les messages de confirmation d'envoie et de remerciement-->
          <div class="formContainer perfectCenter flexColumn">
            <!-- le bouton de fermeture animé -->
            <div class="closeFormContainer">
              <div class="buttonCloseForm"></div>
            </div>

            <h3>Me contacter ?</h3>

            <form class="form">
              <input type="text" name="firstName" value="" placeholder="Votre prénom" required>
              <input type="text" name="lastName" value="" placeholder="Votre nom" required>
              <input type="text" name="email" value="" placeholder="Votre mail" required>
              <textarea name="message" required></textarea>
              <input class="submit" type="submit" name="" value="Envoyer">
            </form>
          </div>

          <!-- Le conteneur rose -->
          <div class="contactContainer">
            <p>charles.4nier@gmail.com</p>
            <a>https://github.com/charles4nier</a>
          </div>

        </div>

          <!-- Le formulaire version small device -->
        <div class="smallDeviceFormContainer flexColumn perfectCenter">
          <h3 class="titleFormSmallDevice">Me contacter ?</h3>
          <form class="formSmallDevice flexColumn perfectCenter" action="index.html" method="post">
            <input type="text" name="firstName" value="" placeholder="Votre prénom" required>
            <input type="text" name="lastName" value="" placeholder="Votre nom" required>
            <input type="text" name="email" value="" placeholder="Votre mail" required>
            <textarea name="message" required></textarea>
            <input class="submitSmallDevice" type="submit" name="" value="Envoyer">
          </form>

            <!-- Le contact version small device -->
          <div class="contactContainerSmallDevice flexColumn flexWrap perfectCenter">
            <p>charles.4nier@gmail.com</p>
            <a>https://github.com/charles4nier</a>
          </div>
        </div>


      </section>
    </main>

    <footer id="footer" class="footer container-fluid">

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/ease.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
