//soit 2 elements html sur lesquels agirs, le bouton et la nav



//On écoute le bouton
//A l'evenement click

function changeDisplay(newDisplay) {
    var elem = document.getElementById('slide');
    elem.style.display = newDisplay;
  }

//on modifie le css de la nav

document.body.addEventListener("mouseleave",function() {
    // alert("Kesktuféla ?");
    console.log("event fired")

});

