var widget = document.querySelector('.widget');

//Sera utilisé pour le widget affichant les donnees du moment
//Selection de la plage horraire actuelle
var day = new Date();
var currentHour = day.getHours() * 100;
var myHour;
switch (true) {
  case currentHour < 300:
    myHour = 0;
    break;
  case currentHour < 600:
    myHour = 1;
    break;
  case currentHour < 900:
    myHour = 2;
    break;
  case currentHour < 1200:
    myHour = 3;
    break;
  case currentHour < 1500:
    myHour  = 4;
    break;
  case currentHour < 1800:
    myHour = 5;
    break;
  case currentHour < 2100:
    myHour = 6;
    break;
  case currentHour < 2400:
    myHour = 7;
}

function widgetCall() {
  fetch(composit)
    .then(function (response) {
      return response.json();
    })

    .then(function (donnees) {

      weatherDay = donnees.data.weather[0];
      hours = weatherDay.hourly[myHour];

      //Boucle sur les heures
      
        //Recuperation des donnees
        temperature = hours.tempC;
        icon = hours.weatherIconUrl[0].value;

        //Récupération données vent

        vitVent = hours.windspeedKmph; //Vitesse en Km/h
        windSpeed = Math.round(vitVent * 0.54); // Conversion en noeuds marins/heure
        rafales = hours.WindGustKmph;
        windGust = Math.round(rafales * 0.54);
        windDir = hours.winddirDegree;
        dirVent = hours.winddir16Point;
        //Fin récupération données vent

        //Recuperation donnees mer
        merTotal = hours.sigHeight_m;
        directionHoule = hours.swellDir;
        seaTemperature = hours.waterTemp_C;
        //Fin recuperation donnees mer
        //Fin récupération des donnees

        //Affichage

        // icons.insertAdjacentHTML("beforeend", "<td><img src='" + icon + "'></img></td>");
        widget.innerHTML += "<img src='" + icon + "'></img>";
        widget.innerHTML += "<p>" + temperature +"°C </p>";

        widget.innerHTML += "<p>"+ windDir + "</p>";
      
        directionVent.insertAdjacentHTML(
          "beforeend",
          "<td>" + dirVent + "</td>"
        );
        merTot.insertAdjacentHTML("beforeend", "<td>" + merTotal + "</td>");
        dirHoule.insertAdjacentHTML(
          "beforeend",
          "<td>" + directionHoule + "</td>"
        );
        seaTemp.insertAdjacentHTML(
          "beforeend",
          "<td>" + seaTemperature + "</td>"
        );
        //Affichage
      
      //Fin boucle heures
    });
}

widgetCall();
//Selection de la plage horraire actuelle
//Sera utilisé pour le widget affichant les donnees du moment