var page = document.location.href.match(/[^\/]+$/)[0];
if (page == "index.php") {
  var signModal = document.getElementById("signModal");
  var logModal = document.getElementById("logModal");
  // Get the button that opens the modal
  var signbtn = document.getElementById("signBtn");
  var logbtn = document.getElementById("logBtn");

  // Get the <span> element that closes the modal
  var signSpan = document.getElementsByClassName("close")[0];
  var logSpan = document.getElementsByClassName("close")[1];

  // When the user clicks on the button, open the modal
  signbtn.onclick = function () {
    signModal.style.display = "block";
  };

  logbtn.onclick = function () {
    logModal.style.display = "block";
  };

  // When the user clicks on <span> (x), close the modal
  signSpan.onclick = function () {
    signModal.style.display = "none";
  };
  logSpan.onclick = function () {
    logModal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it

  window.onclick = function (event) {
    if (event.target == logModal) {
      logModal.style.display = "none";
    }
  };

  window.onclick = function (event) {
    if (event.target == signModal) {
      signModal.style.display = "none";
    }
  };
}

var reponse = document.querySelector("#reponse");

var connexion = {};
var load = {};
var cookie = document.cookie;

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(";");

  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user = getCookie("loged_user");
  if (user != "") {
    //window.location.replace("user.php");
  } else {
    reponse.innerText = "accès refusé";
  }
}

load.resetCookie = function () {
 setCookie("loged_user", null);
 var user = getCookie("loged_user");
 console.log( user);

};

/* Code permettant la redirection si un utilisateur essaie d'accéder directement à la page sans se loger */
load.checkPage = function () {
  var user = getCookie("loged_user");
  if (typeof user == undefined || user == "") {
    document.location.replace("login.php");
  }
};
/* FIN Code permettant la redirection si un utilisateur essaie d'accéder directement à la page sans se loger */

connexion.start = function () {
  var listeSelection = document.querySelectorAll("form.ajax");
  listeSelection.forEach(function (balise) {
    balise.addEventListener("submit", connexion.cbAjax); //cb = call back
  });
};

connexion.cbAjax = function (event) {
  event.preventDefault();

  var formulaire = event.target;
  var formData = new FormData(formulaire);
  fetch("api.php", {
    method: "POST",
    body: formData,
  }).then(checkCookie);
};
