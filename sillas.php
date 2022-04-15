
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleSillas.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body>
  
    <div class="movie-container">
      <!-- <label> Select a movie:</label>
      <select id="movie">
        <option value="220">Godzilla vs Kong (RS.220)</option>
        <option value="320">Radhe (RS.320)</option>
        <option value="250">RRR (RS.250)</option>
        <option value="260">F9 (RS.260)</option>
      </select> -->
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div data-index="A1" class="seat"></div>
        <div data-index="A2" class="seat"></div>
        <div data-index="A3" class="seat"></div>
        <div data-index="A4" class="seat"></div>
        <div data-index="A5" class="seat"></div>
        <div data-index="A6" class="seat"></div>
        <div data-index="A7" class="seat"></div>
        <div data-index="A8" class="seat"></div>
      </div>

      <div class="row">
        <div data-index="B1" class="seat"></div>
        <div data-index="B2" class="seat"></div>
        <div data-index="B3" class="seat"></div>
        <div data-index="B4" class="seat sold"></div>
        <div data-index="B5" class="seat sold"></div>
        <div data-index="B6" class="seat"></div>
        <div data-index="B7" class="seat"></div>
        <div data-index="B8" class="seat"></div>
      </div>

      <div class="row">
        <div data-index="C1" class="seat"></div>
        <div data-index="C2" class="seat"></div>
        <div data-index="C3" class="seat"></div>
        <div data-index="C4" class="seat"></div>
        <div data-index="C5" class="seat"></div>
        <div data-index="C6" class="seat"></div>
        <div data-index="C7" class="seat"></div>
        <div data-index="C8" class="seat sold"></div>
      </div>

      <div class="row">
        <div data-index="D1" class="seat"></div>
        <div data-index="D2" class="seat"></div>
        <div data-index="D3" class="seat"></div>
        <div data-index="D4" class="seat"></div>
        <div data-index="D5" class="seat"></div>
        <div data-index="D6" class="seat"></div>
        <div data-index="D7" class="seat"></div>
        <div data-index="D8" class="seat"></div>
      </div>
      <div class="row">
        <div data-index="E1" class="seat"></div>
        <div data-index="E2" class="seat"></div>
        <div data-index="E3" class="seat"></div>
        <div data-index="E4" class="seat sold"></div>
        <div data-index="E5" class="seat sold"></div>
        <div data-index="E6" class="seat"></div>
        <div data-index="E7" class="seat"></div>
        <div data-index="E8" class="seat"></div>
      </div>

      <div class="row">
        <div data-index="F1" class="seat"></div>
        <div data-index="F2" class="seat"></div>
        <div data-index="F3" class="seat"></div>
        <div data-index="F4" class="seat"></div>
        <div data-index="F5" class="seat sold"></div>
        <div data-index="F6" class="seat sold"></div>
        <div data-index="F7" class="seat sold"></div>
        <div data-index="F8" class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
        >0</span
      >
    </p>

    <button type="buttom" onclick="enviar_datos()">Comprar</button>

    <script src="js/scriptSillas.js"></script>
  </body>
</html>
