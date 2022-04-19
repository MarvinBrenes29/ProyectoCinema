
function cuentaTimer(){


    const temporizador = document.querySelectorAll('.contador');
    let tiempoSegundos = 20;


    mostrarTiempo(tiempoSegundos);

    const cuentraRegresiva = setInterval (()=>{
        tiempoSegundo--;
        mostrarTiempo(tiempoSegundo);
        if(tiempoSegundo <= 0 || tiempoSegundo < 1){
            terminarCompra();
            limpiarTiempo(cuentraRegresiva);
        }
    }, 1000);


    function mostrarTiempo(segundo){
        const min = Math.floor(segundo / 60);
        const seg = Math.floor(segundo % 60);
        temporizador.innerHTML = `${min<10 ? '0': ''}${min}:${sec<10?'0':''}${seg}`;
    }

    function terminarCompra(){
        window.location= 'index.php';
    }

}