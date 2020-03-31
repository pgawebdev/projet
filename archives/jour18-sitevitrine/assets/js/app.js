console.log("Check")


var listImg = document.querySelectorAll(".container img");// On crée une variable listImg contennant un tableau où les celules sont chacunes des balises img à l'interieur d'une balise classé container 

for(var i=0; i < listImg.length ; i++){ //On crée une boucle qui s'incrémente tant que l'indice est inférieur à la longueur (nb de fichier) de listImg

    var imageCourante = listImg[i] //On crée une variable qui accède à l'élément du tableau correspondant au numéro d'index en cours

    imageCourante.addEventListener("click", function(event){ //On ajoute un écouteur de click sur les images
        console.log("LE VISITEUR A CLIQUE");

        var imgClique = event.target;
        var imgSource = imgClique.getAttribut("src");
        var img


        
    });
}
