//Variables
const btnEnviar = document.querySelector('#enviar');
const formulario = document.querySelector('#enviar-mail')


//Variables para campos
const email = document.querySelector('#email')
const nombre = document.querySelector('#nombre')
const mensaje = document.querySelector('#mensaje')

  //expresion regular
  const er  = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

eventListeners();
function eventListeners(){
  //Cuando la app arranca
  document.addEventListener('DOMContentLoaded', iniciarApp);

  //Campos del formulario

  email.addEventListener('blur', validarFormulario)
  nombre.addEventListener('blur', validarFormulario)
  mensaje.addEventListener('blur', validarFormulario)

  //Enviar email
  formulario.addEventListener('submit', enviarEmail)
}

//Funciones
function iniciarApp(){
  btnEnviar.disabled = true;
  btnEnviar.classList.add('btn__disabled')

}


//Valida  el formulario

 function validarFormulario(e){

   if(e.target.value.length > 0){
     // Elimina los errores 
     const error = document.querySelector('p.error');
     if(error ){
       error.remove();
     }
     

      e.target.classList.remove('border-red');
    e.target.classList.add('border-green');
   
   }else{
    e.target.classList.remove('border-green');
    e.target.classList.add('border-red');
    mostrarError('Todos los campos son obligatorios');
   }

   if(e.target.type === 'email'){
   
     
     if(er.test(e.target.value)){
      const error = document.querySelector('p.error');
      if(error){
        error.remove();
      }
      
      
       e.target.classList.remove('border-red');
     e.target.classList.add('border-green');
     }else{
      e.target.classList.remove('border-green');
      e.target.classList.add('border-red');
      mostrarError('Email no válido');
     }
   }
if(er.test(email.value) !== '' && nombre.value !== '' && mensaje.value !== ''){
  btnEnviar.disabled = false;
  btnEnviar.classList.remove('btn__disabled')
}

 }

 function mostrarError(mensaje){
   const mensajeError = document.createElement('p')
   mensajeError.textContent = mensaje
   mensajeError.classList.add('error__mensaje', 'error')

    const errores = document.querySelectorAll('.error')

    if(errores.length === 0 ){
      formulario.appendChild(mensajeError)
    }
   
 }

 //Envia el  email 
 function enviarEmail(e){
   e.preventDefault();

   //mostrar el spinner
   const spinner = document.querySelector('#spinner');
   spinner.style.display = 'flex';

   //Despues de 3 segundos ocultar el spinner y mostrar el mensaje

   setTimeout(() =>{
     spinner.style.display = 'none';
     //Mensaje que se envio correctamente
     const parrafo = document.createElement('p')
     parrafo.textContent = 'El mensaje se envió correctamente'
     parrafo.classList.add('enviado')

     //Inserta el parrafo antes del spinner
     formulario.insertBefore(parrafo, spinner);

     setTimeout(() =>{
       //Elimina el mensaje de exito
      parrafo.remove();
      resetearFormulario();
     },5000)
   },3000);
 }
 //Reseteo de formulario
 function resetearFormulario(e){
   formulario.reset();
   iniciarApp();
   
 }



 //Mapa
 var map = L.map('map').setView([51.505, -0.09], 13);

 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(map);
 
 L.marker([51.5, -0.09]).addTo(map)
     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
     .openPopup();