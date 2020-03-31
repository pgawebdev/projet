const weatherIcons = {
    "Rain":"wi wi-day-rain",
    "Clouds":"wi wi-day-cloudy",
    "Clear":"wi wi-day-sunny",
    "Snow":"wi wi-day-snow",
    "mist":"wi wi-day-fog",
    "Drizzle":"wi wi-day-sleet",
}

function main()
{
    console.log('hello')
    fetch("https://api.ipify.org/?format=json")
    //    .then(function(response)){
    //        return response.json()
    //    }
    .then (response => response.json())
        
    .then(function(data)
    {
        const ip = data.ip;
        fetch(`http://api.ipstack.com/${ip}?access_key=30c029b1d2a8dcdcdf26ac5a0e07b914`)
        .then(function(response)
        {
            return response.json();
        })
        
        .then(function(data)
        {
            console.log(data);
            let city = data.city;
            
            city = city.split(" ")[0].toLowerCase();
            console.log(city)
            fetch(`http://api.openweathermap.org/data/2.5/weather?q=aix-en-provence&appid=d143570c5a58c8c3fc53c4ab0a2daf3f`)

                .then(function(response)
                {
                    return response.json();
                })
                .then(function(data) {
                    //console.log(data);
  
                    // ici je récupère les éléments du DOM dans lesquels je veux afficher la valeur des infos météo que je récupère
                    const city = document.querySelector("h1");
                    const temp = document.querySelector("h2");
  
  
                    // ensuite j'injecte ces valeu
                    city.innerText += data.name;
                    temp.innerText += data.main.temp;
                  });
              });
          });
}
main()