### EXO1

<!-- CREER UN FICHIER poo-exo1.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

``` php  -->
<?php
// AJOUTER LE CODE POUR AFFICHER coucou

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...


// CODE NON MODIFIABLE 
// (LAISSER CE CODE TEL QUEL SINON TU PAIES UNE AMENDE...)
$objet = new Exo1;



<?php

class Bonjour{

     static function salut(){
    echo 'coucou';
    }
}



Bonjour::salut();


### EXO2

// CREER UN FICHIER poo-exo2.php
// POUR COMPLETER LE CODE...
// (ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

// ```php
<?php
// AJOUTER LE CODE POO POUR AFFICHER
/*
(header)
(section)
(footer)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...


// CODE NON MODIFIABLE 
// (LAISSER CE CODE TEL QUEL SINON TU PAIES UNE AMENDE...)
// CODE NON MODIFIABLE
$objetHeader    = new Header;
$objetSection   = new Section;
$objetFooter    = new Footer;

```

### EXO3

CREER UN FICHIER poo-exo3.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
// (header)
// (LE CONTENU DE MA PAGE)
// (footer)

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// CODE NON MODIFIABLE
$objetPage = new Page;                              
$objetPage->setContenu("LE CONTENU DE MA PAGE");    
$objetPage->afficher();                             


```

### EXO4

CREER UN FICHIER poo-exo4.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php

// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*

(header)
(SECTION1)
(SECTION2)
(SECTION3)
(footer)

*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// CODE NON MODIFIABLE
$objetPage = new Page;                     
$objetPage->ajouterContenu("SECTION1");
$objetPage->ajouterContenu("SECTION2");
$objetPage->ajouterContenu("SECTION3");
$objetPage->afficherListe();

```

### EXO5

CREER UN FICHIER poo-exo5.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
(CODE DU HEADER)
(CODE DE LA SECTION1)
(CODE DE LA SECTION2)
(CODE DU FOOTER)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// CODE NON MODIFIABLE
$objet1 = new PageV2;
$objet1->ajouter("header", "(CODE DU HEADER)");

$objet2 = new PageV2;
$objet2->ajouter("footer", "(CODE DU FOOTER)");

$objet3 = new PageV2;
$objet3->ajouter("section1", "(CODE DE LA SECTION1)");

$objet4 = new PageV2;
$objet4->ajouter("section2", "(CODE DE LA SECTION2)");

$objet5 = new PageV2;
$objet5->afficherTab(["header", "section1", "section2", "footer"]);


```

### EXO6

CREER UN FICHIER poo-exo6.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
<header>
<h1>TITRE1</h1>
</header>
<main>
<section>
    CONTENU DE MA SECTION
</section>
</main>
<footer>
TOUS DROITS RESERVES
</footer>
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...


// CODE NON MODIFIABLE
new Info("h1",      "TITRE1");
new Info("section", "CONTENU DE MA SECTION");
new Info("footer",  "TOUS DROITS RESERVES");

$header = new Header;
$main   = new Main;
$footer = new Footer;

echo
<<<CODEHTML

$header
$main
$footer

CODEHTML;

```

### EXO7

CREER UN FICHIER poo-exo7.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
<header>
<h1>TITRE1</h1>
<nav>
    <ul>
        <li><a href="index.php">accueil</a></li>
        <li><a href="galerie.php">galerie</a></li>
        <li><a href="contact.php">contact</a></li>
    </ul>
</nav>
</header>
<main>
<section>
    CONTENU DE MA SECTION1
</section>
<section>
    CONTENU DE MA SECTION2
</section>
</main>
<footer>
TOUS DROITS RESERVES
</footer>
*/


// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// CODE NON MODIFIABLE
new Info("h1",       "TITRE1");
new Info("section1", "CONTENU DE MA SECTION1");
new Info("section2", "CONTENU DE MA SECTION2");
new Info("section3", "CONTENU DE MA SECTION3");
new Info("footer",   "TOUS DROITS RESERVES");

new Menu("accueil", "index.php");
new Menu("actus",   "actus.php");
new Menu("galerie", "galerie.php");
new Menu("contact", "contact.php");

$header     = new Header;
$main       = new MainMulti;
$footer     = new Footer;

$main->ajouter("section1");
$main->ajouter("section2");
$main->ajouter("section3");

echo
<<<CODEHTML

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>mon title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
$header
$main
$footer
</body>
</html>

CODEHTML;

```

### EXO8

CREER UN FICHIER poo-exo8.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

```php
<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
<header>
<h1>TITRE1</h1>
<nav>
    <ul>
        <li><a href="index.php">accueil</a></li>
        <li><a href="galerie.php">galerie</a></li>
        <li><a href="contact.php">contact</a></li>
    </ul>
</nav>
</header>
<main>
<section>
    <h2>TITRE DE LA SECTION1</h2>
    <div class="container">
        <div>
            BLOC1
        </div>
        <div>
            BLOC2
        </div>
    </div>
</section>
<section>
    <h2>TITRE DE LA SECTION2</h2>
    <div class="container">
        <div>
            BLOC3
        </div>
        <div>
            BLOC4
        </div>
        <div>
            BLOC5
        </div>
    </div>
</section>
</main>
<footer>
TOUS DROITS RESERVES
</footer>
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...


// CODE NON MODIFIABLE
$header     = new Header;
$main       = new MainV2;
$footer     = new Footer;


new Info("h1",      "TITRE1");
new Info("footer",  "TOUS DROITS RESERVES");

new Info("section1", "TITRE DE MA SECTION1");
new Info("section2", "TITRE DE MA SECTION2");

new Info("bloc1",   "BLOC1");
new Info("bloc2",   "BLOC2");
new Info("bloc3",   "BLOC3");
new Info("bloc4",   "BLOC4");
new Info("bloc5",   "BLOC5");

new Menu("accueil", "index.php");
new Menu("galerie", "galerie.php");
new Menu("contact", "contact.php");



$main->ajouterBloc("section1", ["bloc1", "bloc2"]);
$main->ajouterBloc("section2", ["bloc3", "bloc4", "bloc5"]);


echo
<<<CODEHTML

$header
$main
$footer

CODEHTML;

```