// Créer une variable 'tableau' contenant le tableau
function randomUser () {
        const randomIndex = Math.floor(Math.random() * MonTableau.length) 
  console.log(MonTableau[randomIndex]);
}

const userBtn = document.getElementById("userBtn");
const userInfo = document.getElementById("userInfo");

 userBtn.addEventListener('click', randomUser)

return