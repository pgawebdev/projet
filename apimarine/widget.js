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