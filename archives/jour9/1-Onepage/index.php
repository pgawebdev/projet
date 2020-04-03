<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>CV Archen</title>
</head>

<body>
    <header>
        <!-- Menu de navigation -->
        <nav>
            <a href="#formation">Formation</a>
            <a href="#emplois">Emplois</a>
            <a href="#competences">Compétences</a>
        </nav>
        <!-- Fin Menu de navigation-->

        <!-- Banner -->
        <section>
            <h1>Pierre-Guillaume Archen</h1>
            <div class="container" id="banner">
                <img src="assets/img/ufolk-the-molx-img050.jpg" id="ocean" alt="Illustration">
                <img src="assets/img/ufolk-the-molx-img0452.jpg" id="ville" alt="illustration">
                <img src="assets/img/ufolk-folk-img002.jpg">
            </div>
        </section>
        <!-- Banner -->
    </header>


    <!--Container global-->
    <div class="container">
        <!-- Sidebar gauche-->
        <section id="left-side">
            <img id="samo" src="assets/img/molx-samourai-colov2.jpg" alt="illustration représentant un samouraï">
        </section>
        <!--Sidebar gauche-->
        <!-- Début du CV -->
        <main>
            <!--Formation-->
            <section id="formation">
                <h2 id="vert">Formation</h2>
                <div>
                    <h3>ACOPAD</h3>
                    <h4>Intégrateur web et mobile :</h4>
                    Marseille-France <span class="date"> Avr.2016 - Juin 2016</span>
                    <p>Initiation au HTLM/CSS, Gestion de Base de données MySQL, PHP
                        <span>: Wordpress,Wamp</span>Création d’un site en statique</p>
                </div>
                <div>
                    <h3> Haute Ecole Albert Jacquard</h3>
                    <h4> Bachelor en Techniques graphiques finalité techniques infographique (Niveau):</h4>
                    Namur-Belgique
                    </br><span class="date"> 2012 - 2015</span>
                    <p>Anatomie, Communication visuel, Dessin numérique Bitmap/Vectoriel, Droit d’auteur, Illustration,
                        Photographie, Création d’un livre d’illustration</p>
                </div>
            </section>
            <!--Formation-->
            <!--Emplois-->
            <section id="emplois">
                <div>
                    <h2> GRAPHISTE FREELANCE</h2>
                    <h3>Graphiste – Autoentrepreneur</h3>
                    <span class="date">Dec. 2017 – Sept. 2019</span>
                    <ul>
                        <li> Gestion / Prospection de clientèle, Devis, Etablissement de cahier des charges,
                            Priorisation des tâches</li>
                        <li>Création d’une méthode générale de travail / Etude de la charte graphique si existante
                            Premières propositions, Retour et modification à effectuer, Correction, Va et viens jusqu’à
                            satisfaction</li>
                        <li>Création graphique / Photomontage et retouche de photo de mariage (particuliers), Cartes de
                            visites (autoentrepreneurs), Illustration d’habillage de document (Keeex)</li>
                        Compétences : Gestion micro-entreprise, Relation client, Méthode de travail orienté clients
                    </ul>
                </div>
                <div>
                    <h2> MISSION LOCALE</h2>
                    <h3> Médiateur de la lutte contre la fracture numérique – Service civique</h3>
                    Aix-en-Provence
                    <span class="date">Sept. 2016 – Avr. 2017</span>

                    <ul>
                        <li> Gestion du parc informatique </li>
                        <li> Sécurisation des machines : création de comptes utilisateurs et de routines d’effacement
                            des historique et fichiers</li>
                        <li> Accompagnement du public dans l’utilisation des ordinateurs : Rédaction de CV et Lettres de
                            motivations, utilisation de services type CAF ou Pôle Emploi</li>
                        <li>Mise en place d’Ateliers numériques : Réponse à l’appel à projet de la Fondation Orange</li>
                        <li> Co-création d’un cours sur l’identité numérique avec l’animateur Orange, co-animation de
                            l’atelier</li>
                        <li>Création graphique / Création de supports de communication interne destinés à promouvoir
                            certains évènement auprès du public</li>
                    </ul>
                    Compétences : Relationnel public difficile, Prise d’initiative, Réponse à un acteur institutionnel
                    Référence : Gilles Thouvenin – Conseillé d’orientation
                </div>
                <div>
                    <h2> PIZZERIA DES QUAIS</h2>
                    Livreur – Emploi étudiant
                    Namur
                    <span class="date"> Sept. 2013 – Juin. 2015</span>
                    <p>Réceptionner et acheminer les colis
                        </br>Encaissement des clients
                        </br>Entretien de 1 er niveau du véhicule
                    </p>
                </div>
            </section>
            <!--Emplois-->

            <!--Compétences-->
            <section id="competences">
                <h2>Compétences</h2>
                <p> Langues :
                    Français
                    Anglais

                    Informatique :
                    Excel Débutant
                    PowerPoint Bon niveau
                    Photoshop, Illustrator : Maîtrise Pro.

                    Thinkerview – Chaine YouTube interviewant des personnes de tous horizons
                    Prise de contact avec des intervenants potentiels
                    Traduction collaborative de vidéos Français <-> Anglais

                        Informatique
                        Veille numérique

                        Bande dessiné – Ce qui m’a mené à faire des études de graphisme.

                        Cinéma – Participation au club des « Cinévores » à Gardanne (4 ans), intérêt particulier pour la
                        Science-fiction
                </p>
            </section>
            <!--Compétences-->

            <!--Fin CV-->

        <?php require_once 'php/view/formulaire.php'?>
        </main>

        <!--Sidebar droite-->
        <section id="right-side">
            <img id="biche" src="assets/img/ufolk-folk-biche.jpg" alt="illustration d'une tête de biche">
            <div id="button-container">
                <button id="job"><i class="material-icons">arrow-upward><a href="./index.html"></a></button></i>
            </div>
        </section>
        <!--Sidebar droite-->
    </div>
    <!-- Container global-->
    <footer>

    </footer>
</body>

</html>