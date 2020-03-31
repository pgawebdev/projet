function lesPions()
{
    var tableauPions =
    [
        { id: 0, equipe:'rouge', vertical:'a', horizontal:0 },
        { id: 1, equipe:'rouge', vertical:'b', horizontal:0 },
        { id: 2, equipe:'rouge', vertical:'c', horizontal:0 },
        { id: 3, equipe:'rouge', vertical:'d', horizontal:0 }
    ];

    for(var a=0; a < tableauPions.length; a++)
    {

        mesPions.innerHTML += 
        `
            <div class= "${tableauPions[a].equipe}Pion" id="${tableauPions[a].vertical}.${tableauPions[a].horizontal}"></div>

        `
    }
}