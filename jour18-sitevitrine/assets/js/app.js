console.log("Check")


var listImg = document.querySelectorAll(".container img");// On crée une variable listImg contennant chacunes des balises img à l'interieur d'une balise classé container 

for(var i=0; i < listImg.lenght ; i++){ //On crée une boucle qui s'incrémente tant que l'indice est inférieur à la longueur (nb de fichier) de listImg

    var imageCourante = listImg[i] //On crée une variable 

    imageCourante.addEventListener("click", function(event){ //On ajoute 
        console.log("LE VISITEUR A CLIQUE");

}
