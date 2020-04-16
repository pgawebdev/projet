//console.log("JS loaded");

// constantes qui vont me permettre de construire mon url de connexion à l'API
const API_KEY = "632ce075260f4c28b13cf1a161e2c5a5";
const ENDPOINT = "https://newsapi.org/v2/top-headlines?q=";

// éléments du DOM
const searchInput = document.querySelector("#search-input");
const searchBtn = document.querySelector("#search-btn");
const articlesContainer = document.querySelector("#affichage-articles");
const reloadBtn = document.querySelector("#reload");

reloadBtn.addEventListener("click", function () {
  window.location.reload();
});
// ajout d'un écouteur sur le bouton du formulairesaersearchBtn/.add.addEventListener()""click, ()function()) {}consoleconsole.log.log()""btn clicked;; eventeventevent.pren.preventDefault();// fonction pour récupérer les infos data au niveau de l'APIcuntcionfunction getfetchData() {}*// requête jaacAJAXfetfetch()``ENDPOIN${}ENDPOINT${}APAPI_KEYAPIKEY=apikye.then.then()responsefunction()response {}return responseresponse.json.json()// ici je retrouourne un objet JS.then.then()function() {}data        consoleconsole.log.log()data.articles;; ; totototoresultsresultsfetchfetchData()q=${}${}$inputValue&;inputinputValue// je dois passer kle contenu de l'input en paramèreètre à ma fonction fetchData  // récupéterrer la valeur de l'inputconst inputinputValue searchValue = sesearchValueInsearchInput.valuesearchsearchValue;    //consoleconsole.log.log()serarsearchValue;  paramparaminputValueinputValue// ici on est dans la définition de la fonction// ici on invoque la fonctionconst articles = results.arti.articles// je récupère la vealeur de la propriété articles// articles contient un tableau d'objets// il va donc falloir que je boucle sur ce tableautableau// méthode for()forfor()let i=0; reslii<   resultsarticlesarticles.length; i++ {}consoleconsole.log.log()articles[]i;   ;// rien à voirsonconst inranbddInindex = Math.floor.floor()Math.ran.random() * articlesarticles.length;consoleconsole.log.log()articles[]index;//// jgégénération d'un index aléatoire pour llaller récupérer un article au hasard dans le tableau////// afficher les articles dans le HMTLartclesarticles.forEartarticles.forEach()function()article {}consoelleconsole.log.log()article//;; // méthode foeforEach()//// méthode while()comptelet compteur = 0whilewhile() {}compteur < articlesarticles.lengthcompteur++        consoleconsole.log.log()artarticles[]compteur;; ;/méthode // méthode map()      const nexwArticles = artarticles.map()function()article {}consoleconsole.log.log()article;; return articleconsoleconsole.log.log()newnewArticles;;//// on agit sur le tableau initial// forEach ne retourne rien// crééee un nouveau tableautableau// retourne un tableau// fait partie des Higher Order Functions/*Autrtes méthodes pour les boucles*/articlesContainer.i.innerHTML += // const div = documentoutput = ``  <article></article>  <h3></h3>${}articles[]i.title<p></p>${}articles[i].titledescription<mallsmall></small>articles[i].title${articles[i].description}authora<a></a> href="=${articles[i].description}urlLien vers l'article<img  >/> src=${articles[i].description}urlToImage alt=${articles[i].description}title; o;utpuoutput;// réinéinitialiser l'adaffichage de mes articlesartarticlesContainer.inn.innerHTML = "";// réinitilialiser le contenu de mon inputinputsaerearchIsearchInput.value = "";//articles.forEach()artcleoicle => {}console.log()atrticle// notation ES6// ici on pourrait utiliser le principe de destructuring pour améliorer la lisibilité du codeifif() {}articlesarticles.lenghttgh > 0              // rien à voir
      // génération d'un index aléatoire pour aller récupérer un article au hasard dans le tableau
      //const index = Math.floor(Math.random() * articles.length);

      //console.log(articles[index]);

      // articles contient un tableau d'objets
      // il va donc falloir que je boucle sur ce tableau

      // méthode for()
      for (let i = 0; i < articles.length; i++) {
        console.log(articles[i]);
        // afficher les articles dans le HMTL

        // ici on pourrait utiliser le principe de destructuring pour améliorer la lisibilité du code

        const output = `
          <article>
            <h3>${articles[i].title}</h3>
            <p>${articles[i].description}</p>
            <small>${articles[i].author}</small>
            <a href=${articles[i].url}>Lien vers l'article</a>
            <img src=${articles[i].urlToImage} alt=${articles[i].title}/>
          </article>
        `;

        articlesContainer.innerHTML += output;
      }

      /*
      Autres méthodes pour les boucles

      // méthode forEach()
      //  on agit sur le tableau initial
  // forch ne retourne rien
        articles.forEach(function (article) {
          //console.log(article);
      });
        // notation ES6
      articles.forEach(article => {
          console.log(article)
        })

        // méthode while()
        let compteur = 0;
       wh ile (compteur < articles.length) {
          //console.log(articles[compteur]);
        compteur++;
        }

        // méthode map()
      // fait partie des Higher Order Functions
      // crée un nouveau tableau
      // retourne un tableau
      const newArticles = articles.map(function (article) {
        return article;
      });

      console.log(newArticles);
      */
 else {}          articlesContainer.innerHTML += 'Aucun artticle trouvé pour la recherche. ';