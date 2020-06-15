<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ETAPE2: DELIMITER LA ZONE D'ACTION DE VUEJS -->
    <div id="app">
        <header>
            <h1>Distributeur de Billets</h1>
        </header>
        <main>
            <section>
                <h2></h2>
                <div>
                    <table>
                        <tr>
                            <th>billet</th>
                            <th>quantitée</th>
                        </tr>
                        <tr v-for="billet in tabBillets">
                            <td>{{billet.valeur}}</td>
                            <td>{{billet.quantite}}</td>
                        </tr>
                    </table>
                </div>
                <input v-model="montant "type="number" step="5" value="0">
                <button @click="distribuerBillet">Valider</button>
                <p>Total disponible{{totalDispo}}</p>
                <p>Vous avez demandé {{montant}}</p>
                <p>Vos Billets : {{distrib}}
            </section>
        </main>
        <footer>
            <p>tous droits réservés</p>
        </footer>
    </div><!-- FIN DE #app -->

    <!-- ETAPE 1 -->
    <!-- ON CHARGE LE CODE DE VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- ETAPE 3 : RELIER MA PAGE AVEC VUEJS -->
    <script>

var mesMethodes =
{
    distribuerBillet: function(tabBillets)
    {   
        var totalDispo =0;
        tabBillets.forEach(monObj =>
            totalDispo += monObj.valeur*monObj.quantite
        );
        return totalDispo;
    }
}

var app = new Vue({
    el: '#app',
    data: {
    tabBillets: 
        
        [
            { valeur:500, quantite:1},
            { valeur:200, quantite:2},
            { valeur:100, quantite:4},
            { valeur:50, quantite:8},
            { valeur:20, quantite:20},
            { valeur:10, quantite:40},
            { valeur:5, quantite:80}
        ],

    montant: 0,
    distrib:"",
    },

    computed:{

    },

    methods: 
        mesMethodes
    
});      

app.distribuerBillet(app.tabBillets);
    </script>

</body>
</html>