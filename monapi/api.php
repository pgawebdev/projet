<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"
    />
    <style>
        .wind-arrow{
            width: 25px;
            height:25px;
            background-color: green;
            clip-path: polygon(50% 0%, 100% 100%, 50% 65%, 0 100%);
        }
    </style>
</head>
<body>
    <header>
        <h1> Prévision météo pour Cannes</h1>
        <h2>Températures:  </h2>
        <h3></h3><img></img>
        <div id="speed">Vent </div><div class="wind-arrow"></div>
        <div class="arrow"></div>

        <label for="recherche">Changer de ville</label>
        <input type="text" id="recherche">
        <button>chercher</button>
    </header>
    <main id="app">
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>

        var app = new Vue({
            el:'#app',
            data:{
                apiKey : "a2875547dee249cea19b5b0d52b2d9c7",
                
            }
        })
        const apiKey = "a2875547dee249cea19b5b0d52b2d9c7";
        var ville = "cannes";

        fetch("http://api.openweathermap.org/data/2.5/weather?q="+ ville +",fr&appid="+ apiKey + "&lang=fr&units=metric")

        .then(function(response) {
              // on récupère la réponse et on la formatte en objet javascript
              return response.json()
              })
        .then(function(data) {
            console.log(data);
       
            //Selections HTML
        const temp      = document.querySelector("h2"); //Selection html temperature
        const ciel      = document.querySelector("h3");
        const image     = document.querySelector("img");
        const vitesse   = document.querySelector("#speed");
        const fleche    = document.querySelector(".wind-arrow"); //Selection html icon orentation du vent
        const recherche = document.querySelector("#recherche")       
        const searchBtn = document.querySelector("button"); //Cibler le Bouton

            //Temperatures
        const temperature = Math.floor(data.main.temp);
        temp.innerText += " "+ temperature +"°";
            
            //Vents
        const meteoDeg = data.wind.deg; //Orientation du vent en degrée
        orientation = meteoDeg%360;// Conversion orientation réel
        console.log.orientation;
        fleche.style.transform = 'rotate(' + orientation + 'deg)';

        const vitesseVent = data.wind.speed; //Exprimé en mètres/seconde
        vitesseKm = Math.floor(vitesseVent*3.6) //conversion Kms/heure
        vitesse.innerText += " "+ vitesseKm +" Km/h";
      
            //Ciel
        const etatCiel = data.weather[0].description;
        ciel.innerText += etatCiel;

        const iconCiel = data.weather[0].icon;
        console.log.iconCiel;
        iconSrc= 'http://openweathermap.org/img/wn/'+ iconCiel +'@2x.png';
        image.src = iconSrc;

            //Changer de ville
        
        

        adminBtn.addEventListener('click', function(event){}); 

        })

        
    </script>
</body>
</html>