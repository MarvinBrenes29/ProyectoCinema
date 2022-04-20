<?php
session_start();
require "model/clsSillas.php";
$sillas = new clsSillas();
$_SESSION['idhorario'] = $_GET['idhorario'];
$idhorario = $_SESSION['idhorario'];
?>


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

    
        <h1 id="contadorTimer">Hola</h1>
    

    <div class="movie-container">

  

     
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Disponible</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Seleccionado</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Vendido</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div data-index="A1" class="seat <?php echo $sillas->estado_silla($idhorario, "A1")?>"></div>
        <div data-index="A2" class="seat <?php echo $sillas->estado_silla($idhorario, "A2")?>"></div>
        <div data-index="A3" class="seat <?php echo $sillas->estado_silla($idhorario, "A3")?>"></div>
        <div data-index="A4" class="seat <?php echo $sillas->estado_silla($idhorario, "A4")?>"></div>
        <div data-index="A5" class="seat <?php echo $sillas->estado_silla($idhorario, "A5")?>"></div>
        <div data-index="A6" class="seat <?php echo $sillas->estado_silla($idhorario, "A6")?>"></div>
        <div data-index="A7" class="seat <?php echo $sillas->estado_silla($idhorario, "A7")?>"></div>
        <div data-index="A8" class="seat <?php echo $sillas->estado_silla($idhorario, "A8")?>"></div>
      </div>

      <div class="row">
        <div data-index="B1" class="seat <?php echo $sillas->estado_silla($idhorario, "B1")?>"></div>
        <div data-index="B2" class="seat <?php echo $sillas->estado_silla($idhorario, "B2")?>"></div>
        <div data-index="B3" class="seat <?php echo $sillas->estado_silla($idhorario, "B3")?>"></div>
        <div data-index="B4" class="seat <?php echo $sillas->estado_silla($idhorario, "B4")?>"></div>
        <div data-index="B5" class="seat <?php echo $sillas->estado_silla($idhorario, "B5")?>"></div>
        <div data-index="B6" class="seat <?php echo $sillas->estado_silla($idhorario, "B6")?>"></div>
        <div data-index="B7" class="seat <?php echo $sillas->estado_silla($idhorario, "B7")?>"></div>
        <div data-index="B8" class="seat <?php echo $sillas->estado_silla($idhorario, "B8")?>"></div>
      </div>

      <div class="row">
        <div data-index="C1" class="seat <?php echo $sillas->estado_silla($idhorario, "C1")?>"></div>
        <div data-index="C2" class="seat <?php echo $sillas->estado_silla($idhorario, "C2")?>"></div>
        <div data-index="C3" class="seat <?php echo $sillas->estado_silla($idhorario, "C3")?>"></div>
        <div data-index="C4" class="seat <?php echo $sillas->estado_silla($idhorario, "C4")?>"></div>
        <div data-index="C5" class="seat <?php echo $sillas->estado_silla($idhorario, "C5")?>"></div>
        <div data-index="C6" class="seat <?php echo $sillas->estado_silla($idhorario, "C6")?>"></div>
        <div data-index="C7" class="seat <?php echo $sillas->estado_silla($idhorario, "C7")?>"></div>
        <div data-index="C8" class="seat <?php echo $sillas->estado_silla($idhorario, "C8")?>"></div>
      </div>

      <div class="row">
        <div data-index="D1" class="seat <?php echo $sillas->estado_silla($idhorario, "D1")?>"></div>
        <div data-index="D2" class="seat <?php echo $sillas->estado_silla($idhorario, "D2")?>"></div>
        <div data-index="D3" class="seat <?php echo $sillas->estado_silla($idhorario, "D3")?>"></div>
        <div data-index="D4" class="seat <?php echo $sillas->estado_silla($idhorario, "D4")?>"></div>
        <div data-index="D5" class="seat <?php echo $sillas->estado_silla($idhorario, "D5")?>"></div>
        <div data-index="D6" class="seat <?php echo $sillas->estado_silla($idhorario, "D6")?>"></div>
        <div data-index="D7" class="seat <?php echo $sillas->estado_silla($idhorario, "D7")?>"></div>
        <div data-index="D8" class="seat <?php echo $sillas->estado_silla($idhorario, "D8")?>"></div>
      </div>
      <div class="row">
        <div data-index="E1" class="seat <?php echo $sillas->estado_silla($idhorario, "E1")?>"></div>
        <div data-index="E2" class="seat <?php echo $sillas->estado_silla($idhorario, "E2")?>"></div>
        <div data-index="E3" class="seat <?php echo $sillas->estado_silla($idhorario, "E3")?>"></div>
        <div data-index="E4" class="seat <?php echo $sillas->estado_silla($idhorario, "E4")?>"></div>
        <div data-index="E5" class="seat <?php echo $sillas->estado_silla($idhorario, "E5")?>"></div>
        <div data-index="E6" class="seat <?php echo $sillas->estado_silla($idhorario, "E6")?>"></div>
        <div data-index="E7" class="seat <?php echo $sillas->estado_silla($idhorario, "E7")?>"></div>
        <div data-index="E8" class="seat <?php echo $sillas->estado_silla($idhorario, "E8")?>"></div>
      </div>

      <div class="row">
        <div data-index="F1" class="seat <?php echo $sillas->estado_silla($idhorario, "F1")?>"></div>
        <div data-index="F2" class="seat <?php echo $sillas->estado_silla($idhorario, "F2")?>"></div>
        <div data-index="F3" class="seat <?php echo $sillas->estado_silla($idhorario, "F3")?>"></div>
        <div data-index="F4" class="seat <?php echo $sillas->estado_silla($idhorario, "F4")?>"></div>
        <div data-index="F5" class="seat <?php echo $sillas->estado_silla($idhorario, "F5")?>"></div>
        <div data-index="F6" class="seat <?php echo $sillas->estado_silla($idhorario, "F6")?>"></div>
        <div data-index="F7" class="seat <?php echo $sillas->estado_silla($idhorario, "F7")?>"></div>
        <div data-index="F8" class="seat <?php echo $sillas->estado_silla($idhorario, "F8")?>"></div>
      </div>
    </div>

    <!-- <p class="text">
      You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
        >0</span>
    </p> -->
    <div class="container">
      <a href='index.php' role='button'><button type="buttom">Regresar</button></a>
      <a role='button'><button type="buttom" onclick="enviar_datos()">Comprar</button></a>
    </div>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="js/scriptSillas.js"></script>
    <script src="js/timer.js"></script>
  </body>
</html>
