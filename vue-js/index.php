<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
    box-sizing: border-box;
}
.listeArticle {
    display:flex;
    flex-wrap: wrap;
    width:100%;
}
.listeArticle article {
    border:1px solid lightgreen;
    width: calc(100% / 3);
}         


article.active {
    background-color: lightgreen;
    display:none;
}

    </style>
</head>
<body>
    <header>
        <h1>VUEJS</h1>
    </header>
    <main>
        <!-- ETAPE2: DELIMITER LA ZONE D'ACTION DE VUEJS -->
        <div id="app">

            <section>
                <h2>exemple basique: vuejs remplace du code dans le html</h2>
                <div>{{ message }}</div>
            </section>

            <section>
                <h2>exemple sur un attribut html</h2>
                <span v-bind:title="message">
                    Passez votre souris sur moi pendant quelques secondes
                    pour voir mon titre lié dynamiquement !
                </span>    
                <!-- NOTATION RACCOURCI AVEC SEULEMENT : AU LIEU DE v-bind: -->
                <span :title="message">
                    Passez votre souris sur moi pendant quelques secondes
                    pour voir mon titre lié dynamiquement !
                </span>    
            </section>

            <section>
                <h2>conditions avec vuejs</h2>
                <p v-if="seen">Maintenant vous me voyez</p>
            </section>

            <section>
                <h2>BOUCLE AVEC VUEJS</h2>
                <div class="listeArticle">
                    <article v-for="todo in todos">
                      <h3>{{ todo.titre }}</h3>
                    </article>
                </div>
            </section>

            <section>
                <h2>EXEMPLE DE CLICK AVEC BOUTON</h2>
                <p>{{ message }}</p>
                <p>{{ messageInverse }}</p>

                <button v-on:click="reverseMessage">cliquer sur le bouton pour changer le message</button>
                <!-- NOTATION RACCOURCI @ AU LIEU DE v-on: (PENSER A UNE OREILLE @ => Listener / ECOUTER...) -->
                <button @click="reverseMessage">cliquer sur le bouton pour changer le message</button>
            </section>

            <section>
                <h2>EXEMPLE AVEC FORMULAIRE</h2>
                <p>{{ message }}</p>
                <input type="text" name="nom" v-model="message">
            </section>

            <section>
                <h2>EXEMPLE AVEC PROPRIETE COMPUTED</h2>
                <input type="number" v-model="quantite">
                <input type="number" v-model="prixUnitaire">
                <h3>{{ quantite * prixUnitaire }}</h3>
                <!-- SI LE CODE EST TROP LONG, ON PEUT LE DEPLACER DANS JS DANS LES PROPRIETES computed -->
                <h3>{{ prixProduit }}</h3>
            </section>

            <section>
                <h2>EXEMPLE AVEC UNE CLASSE CSS</h2>
                <button @click="isActive = !isActive">interrupteur</button>
                <article :class="{ active : isActive }">
                    <h3>TITRE DE MON ARTICLE</h3>
                </article>
            </section>

            <section>
                <h2>EXEMPLE AVEC ATTRIBUT style</h2>
                <input type="color" v-model="activeColor">
                <input type="range" v-model="fontSize" min="10" max="100"><span>{{ fontSize }}</span>  
                <div v-bind:style="{ color: activeColor, fontSize: fontSize + 'px' }">LIGNE DE TEXTE</div>
            </section>    

        </div><!-- FIN DE #app-->

    </main>
    <footer>
        <p>tous droits réservés</p>
    </footer>

    <!-- ETAPE 1 -->
    <!-- ON CHARGE LE CODE DE VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- ETAPE 3 : RELIER MA PAGE AVEC VUEJS -->
    <script>

// ON CREE UNE VARIABLE app 
// ET ON STOCKE COMME VALEUR UN OBJET CREE DEPUIS LA CLASSE Vue

/*
// VERSION NON COMPACTE
var objetData   = 
{
    // ICI LE DEV PEUT CREER SES VARIABLES
    message: 'Hello Vue !'
};

var objetParam = 
{
  el: '#app',       // SELECTEUR CSS QUI PERMET DE SELECTIONNER LA BALISE HTML QUI DELIMITE L'ACTION DE VUEJS
  data: objetData
};

var app = new Vue(objetParam);

*/

// ON PEUT AVOIR NOTRE CODE JS
var compteur = 0;

// VERSION COMPACTE
var app = new Vue({
    el: '#app',     // SELECTEUR CSS QUI PERMET DE SELECTIONNER LA BALISE HTML QUI DELIMITE L'ACTION DE VUEJS
    data: 
    {
        activeColor: 'orange',
        fontSize: 12,
        isActive : true,
        quantite: 0,
        prixUnitaire: 1,
        todos: 
        // JSON ;-p
        [
            { titre: 'Apprendre JavaScript' },
            { titre: 'Apprendre Vue' },
            { titre: 'Créer quelque chose de génial' }
        ],
        seen: true,
        message: 'Hello Vue !'
    },
    computed: {
        // JE PEUX AJOUTER MES PROPRIETES DANS L'OBJET computed
        // ET MES PROPRIETES SONT DES FONCTIONS
        prixProduit : function ()
        {
            // ATTENTION, IL FAUT METTRE this
            return this.quantite * this.prixUnitaire;
        },
        // un accesseur (getter) calculé
        messageInverse : function () {
            // `this` pointe sur l'instance vm
            return this.message.split('').reverse().join('')
        }
    },
    methods: 
    {
        reverseMessage: function () 
        {
            // ON INVERSE L'ORDRE DES LETTRES
            this.message = this.message.split('').reverse().join('');
        }
    },
    beforeCreate: function () {
        // `this` est une référence à l'instance de vm
        console.log('VUEJS VA APPELER CE CODE SUR ETAPE beforeCreate');
    },
    created: function () {
        // `this` est une référence à l'instance de vm
        console.log('VUEJS VA APPELER CE CODE SUR ETAPE created');
    },
    beforeUpdate: function () {
        // `this` est une référence à l'instance de vm
        console.log('VUEJS VA APPELER CE CODE SUR ETAPE beforeUpdate');
    },
    updated: function () {
        // `this` est une référence à l'instance de vm
        console.log('VUEJS VA APPELER CE CODE SUR ETAPE updated');
        // ON A ENVIE DE COMPTER LE NOMBRE D'UPDATE
        console.log(compteur++);
    }

});

    </script>
</body>
</html>