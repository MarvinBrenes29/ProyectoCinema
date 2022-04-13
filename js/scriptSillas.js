const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");


// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Actualiza el total, esto se ejecuta desde el inicio, abajo
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));


  // Contador de campos seleccionados

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  

  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {

  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");
  
  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }

}



// Seat click event
container.addEventListener("click", (e) => {
  // target es a lo que se le hizo click, container
  // Si tiene seat and sold entonces pone Slected
  if (e.target.classList.contains("seat") && !e.target.classList.contains("sold")) {
    e.target.classList.toggle("selected");

    
  }
});

function enviar_datos(){
    console.log("entre");
    let seleccionado = document.querySelectorAll(".container .seat.selected");
    console.log(seleccionado);
    seleccionado.forEach((elemento)=>{
      console.log(elemento.dataset.index);
    });

    
}


