"use strict"

document.querySelector("#cargar").onlick = function() {

    let ciudad = document.querySelector("#provincia").value;

    const key = '12fad6141ceb33a4c8a08d4193920fe9';
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${ciudad},cr&appid=${key}&lang=es`

    fetch(url)
    then(respuesta => respuesta.json())
    then(datos => {
        mostrarDatos(datos, ciudad)
    })

}

function mostrarDatos(datos){
    const {coord: {lon, lat}} = datos;

    mostrarMapa([lat, lon], 8)
}

function mostrarMapa(coordenadas, zoom){

    document.querySelector("#containerMapa").innerHTML = `<div id="map" class="mx-auto"></div>`;

var map = L.map('map').setView(coordenadas, zoom);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYWxzb2xpczEyMyIsImEiOiJja3prdGZidmMxbmVxMm9xcmJwa3RyOHFiIn0.KKEIgHgO6Pj3YqAzp_Lw2A'
}).addTo(map);

let provincia = document.querySelector("#provincia").value;


var marcador = L.marker(coordenadas).addTo(map);
let texto = elaboracionTexto(provincia);

marcador.bindPopup(`<h1>Bienvenidos a ${provincia}</h1> <p>${texto}</p>`);
}

function elaboracionTexto(provincia){
    let texto = "";
    if(provincia == "San Jose"){
        texto = "Casa de El teatro Melico Salazar, Teatro Nacional y Zapote";
    }else if(provincia == "Alajuela"){
        texto = "Casa del aeropuerto, Caldosas y el Morera Soto";
    }else if(provincia == "Heredia"){
        texto = "Casa del Castillo Country Club, El estadio de Heredia y El Paseo de las Flores";
    }else if(provincia == "Cartago"){
        texto = "Casa del Volcan Irazu, Jardin de Flores Amarillas y la Basilica de los Angeles";
    }else if(provincia == "Guanacaste"){
        texto = "Casa de La bajura de Nicoya, Volcan Rincon de la vieja y Playa Tamarindo";
    }else if(provincia == "Puntarenas"){
        texto = "Casa del Churchill, de Caldera y de Puntarenas centro";
    }else if(provincia == "Limon"){
        texto = "Casa de playa Uvita, Tortuguero y Puerto viejo";
    }
    return texto;
}