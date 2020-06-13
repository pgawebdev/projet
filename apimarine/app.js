//Constantes de connexion à l'API météo
const url = "https://api.worldweatheronline.com/premium/v1/marine.ashx?";
const apiKey = "key=ecee7b212ba24962b89131213201006";
const format = "&format=json";
const coordo = "&q=43.525,7.011";
const lang = "&lang=fr";
const composit = url + apiKey + format + coordo + lang;
//Constantes de connexion à l'API météo

//Selection elements du DOM
const affichage = document.querySelector(".affichage");
const temp = document.querySelector("#temp");
//Selection elements du DOM

//Variables traitement Date
var day = new Date();
var nextDay = new Date();
const options = { weekday: "short", day: "numeric" };
//Variables traitement Date

//Affichage des bouttons de selection du jour
function datation() {
  for (index = 0; index <= 6; index++) {
    let frenchifiedDate = day.toLocaleDateString("fr-FR", options);
    jours.insertAdjacentHTML(
      "beforeend",
      "<button class='jour'>" + frenchifiedDate + "</button>"
    );
    nextDay.setDate(day.getDate() + 1);
    day = nextDay;
  }

  var listeSelection = document.querySelectorAll(".jour");
  listeSelection.forEach(function (balise) {
    balise.addEventListener("click", afficherJour);
  });
}
//Affichage des bouttons de selection du jour

function afficherJour() {
  console.log("click");
}

//Sera utilisé pour le widget affichant les donnees du moment
//Selection de la plage horraire actuelle
var currentHour = day.getHours() * 100;
var myHour = "hourly";
switch (true) {
  case currentHour < 300:
    myHour += "[0]";
    break;
  case currentHour < 600:
    myHour += "[1]";
    break;
  case currentHour < 900:
    myHour += "[2]";
    break;
  case currentHour < 1200:
    myHour += "[3]";
    break;
  case currentHour < 1500:
    myHour += "[4]";
    break;
  case currentHour < 1800:
    myHour += "[5]";
    break;
  case currentHour < 2100:
    myHour += "[6]";
    break;
  case currentHour < 2400:
    myHour += "[7]";
}
//Selection de la plage horraire actuelle
//Sera utilisé pour le widget affichant les donnees du moment

datation();

console.log(myHour);
fetch(composit)
  .then(function (response) {
    return response.json();
  })

  .then(function (donnees) {
    let hour = myHour;
    console.log(donnees.data);
    weather = donnees.data.weather[0];
    console.log(weather);

    temperature = "weather." + hour + ".tempC";
    let tempC = temperature;
    temp.insertAdjacentHTML("beforeend", "<th>" + tempC + "</th>");
  });
