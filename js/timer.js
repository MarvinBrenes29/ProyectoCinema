"use strict";


document.querySelector('.botonHorario').onclick = function(){


    let tiempoSegundos = 20;


    mostrarTiempo(tiempoSegundos);

    const cuentraRegresiva = setInterval (()=>{
        tiempoSegundos--;
        mostrarTiempo(tiempoSegundos);
        if(tiempoSegundos <= 0 || tiempoSegundos < 1){
            terminarCompra();
            limpiarTiempo(cuentraRegresiva);
        }
    }, 1000);

}

function mostrarTiempo(segundo){
    const min = Math.floor(segundo / 60);
    const seg = Math.floor(segundo % 60);
    document.querySelectorAll('.contadorTimer').innerHTML = `${min<10 ? '0': ''}${min}:${sec<10?'0':''}${seg}`;
}

function terminarCompra(){
    window.location= 'index.php';
}