// Créer une variable 'tableau' contenant le tableau
function randomUser () {
        const randomIndex = Math.floor(Math.random() * MonTableau.length) 
  console.log(MonTableau[randomIndex]);
}

const userBtn = document.getElementById("userBtn");
const userInfo = document.getElementById("userInfo");

 userBtn.addEventListener('click', function(){

 const user = randomUser();

 // on affiche la valeur des propriétés du user dans un template HTML à l'intérieur de l'élément qu'on a sélectionné
 userInfo.innerHTML = `
 <div>
   <h1>Nom de l'utilisateur : ${user.name}</h1>
   <p>Id de l'utilisateur : ${user.id}</p>
   <p>Email de l'utilisateur : ${user.email}</p>
   <p>Username de l'utilisateur : ${user.username}</p>
 </div>`;
 });