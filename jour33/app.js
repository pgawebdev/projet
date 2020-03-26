const weatherIcons = {
    "Rain":"wi wi-day-rain",
    "Clouds":"wi wi-day-cloudy",
    "Clear":"wi wi-day-sunny",
    "Snow":"wi wi-day-snow",
    "mist":"wi wi-day-fog",
    "Drizzle":"wi wi-day-sleet",
}

function capitalize(str)
{
    return str[0].toUpperCase() + str.slice(1);
}

async function main()
{
    const ip = await fetch('https//api.ipify.org?format=json')
        .then(resultat => resultat.json())
        .then(json => json.ip)
           

    const ville = await fetch('https//api.ipify.org?format=json')
        .then( resultat => resultat.json())
        .then(json => json.city)
                    
    const meteo = await fetch(`https//api.openweathermap.org/data/2.5/weather?q=${ville}&appid={d143570c5a58c8c3fc53c4ab0a2daf3f}`)
        .then( resultat => resultat.json())
        .then(json => json)
    console.log(meteo);
    displayWeatherInfos(meteo)            
}

function displayWeatherInfos(data){
    const name = data.name;
    const temperature = data.main.temp;
    const conditions = data.weather[0].main;
    const description = data.weather[0].description;

    document.querySelector('#ville').textContent= name;
    document.querySelector('#temperature').textContent= Math.round(temperature);
    document.querySelector('#conditions').textContent= capitalize(description);
    document.querySelector('i.wi').className = weatherIcon[conditions];

    document.body.className = conditions.toLowerCase();
}
    const ville = document.querySelector('#ville');
    ville.addEventListener('click',()=>{
        ville.contentEditable = true;
    })

main();

