//Selection elements du DOM
const iconsDom = document.querySelector("#icons");
const rows = document.querySelectorAll("tbody tr");
//Selection elements du DOM

//Appel API
function ApiCall() {
  fetch(composit)
    .then(function (response) {
      return response.json();
    })

    .then(function (donnees) {
      if (typeof selectedDay == "undefined") {
        var dayId = 0;
      } else {
        var dayId = selectedDay;
        rows.forEach((element) => {
          var cellOne = element.firstElementChild.innerHTML;
          element.innerHTML = "<td>" + cellOne + "</td>";
        });
      }

      hourId = 0;
      weatherDay = donnees.data.weather[dayId];
      hours = weatherDay.hourly;

      //Boucle sur les heures
      hours.forEach((element) => {
        //Recuperation des donnees
        temperature = element.tempC;
        icon = element.weatherIconUrl[0].value;

        //Récupération données vent

        vitVent = element.windspeedKmph; //Vitesse en Km/h
        windSpeed = Math.round(vitVent * 0.54); // Conversion en noeuds marins/heure
        rafales = element.WindGustKmph;
        windGust = Math.round(rafales * 0.54);
        windDir = element.winddirDegree;
        dirVent = element.winddir16Point;
        //Fin récupération données vent

        //Recuperation donnees mer
        merTotal = element.sigHeight_m;
        directionHoule = element.swellDir;
        seaTemperature = element.waterTemp_C;
        //Fin recuperation donnees mer
        //Fin récupération des donnees

        //Affichage

        // icons.insertAdjacentHTML("beforeend", "<td><img src='" + icon + "'></img></td>");
        iconsDom.innerHTML += "<td><img src='" + icon + "'></img></td>";
        temp.insertAdjacentHTML("beforeend", "<td>" + temperature + "</td>");
        windsSpeed.insertAdjacentHTML("beforeend","<td>" + windSpeed + "</td>");
        gust.insertAdjacentHTML("beforeend", "<td>" + windGust + "</td>");
        windDirection.insertAdjacentHTML("beforeend","<td>" + windDir + "</td>");
        directionVent.insertAdjacentHTML("beforeend","<td><div class='orientation'style='transform:rotate(" + windDir + "deg)'></div>" + dirVent + "</td>"
        );
        seaTemp.insertAdjacentHTML("beforeend","<td>" + seaTemperature + "</td>"
        );
        //Affichage

        hourId++;
      });
      //Fin boucle heures
    });
}
//Fin appel API

//Variables traitement Date
var day = new Date();
var nextDay = new Date();
const options = { weekday: "short", day: "numeric" };
//Variables traitement Date

//Affichage des bouttons de selection du jour
//On récupère les données sur 7 jour, on boucle donc 7 fois
function datation() {
  for (index = 0; index <= 6; index++) {
    let frenchifiedDate = day.toLocaleDateString("fr-FR", options);
    days.insertAdjacentHTML(
      "beforeend",
      "<button class='jour' id='j" +
      index +
      "'>" +
      frenchifiedDate +
      "</button>"
    );
    nextDay.setDate(day.getDate() + 1);
    day = nextDay;
  }

  var listeSelection = document.querySelectorAll(".jour");
  listeSelection.forEach(function (balise) {
    balise.addEventListener("click", afficherJour);
  });
}
//Fin affichage des bouttons de selection du jour

//Le click permet d'afficher les info du jour selectionné
function afficherJour() {
  var btnId = this.id;
  splitId = btnId.trim().split("");
  selectedDay = splitId[1];
  ApiCall();
}

datation();

ApiCall();
