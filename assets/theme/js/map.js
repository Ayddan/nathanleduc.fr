let map = L.map('map').setView([47.38589,0.69428], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'nathanleduc/ckqz8i47wcpwv18o9pnaju9u4',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibmF0aGFubGVkdWMiLCJhIjoiY2txczJ2Z3NkMTZ6MDMxcWF3M2d4emM0eiJ9.VyXBdhZ6yeUlBa6SHjEu-g'
}).addTo(map);

L.marker([47.38989,0.68928]).addTo(map);