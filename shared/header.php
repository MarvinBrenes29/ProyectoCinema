<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="styleSillas.css" />
    <link rel="stylesheet" href ="css/estilos-tabla.css">  
      <link rel="stylesheet" href="css/styles?2.0.css">
      
  <title>Cinema</title>
</head>

<body>

  <!-- Navbar  -->
  <section class="pb-4">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top mt-10">
      <div class="container">
        <a href="index.php">
          <img class="logo" src="img/Logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="pelicula.php" class="nav-link">Películas</a>
            </li>
            <li class="nav-item">
              <a href="nosotros.php" class="nav-link">Nosotros</a>
            </li>
              <!--Dropdown-->
              <?php if (
                    isset($_SESSION["login"]) &&
                    strcmp($_SESSION["rol"], "admin") == 0
              ) { ?>

              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administración
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="adm_banners.php">Administración de Banners</a></li>
                          
                            <li><a class="dropdown-item" href="adm_peliculas.php">Administración de Peliculas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="adm_horarios.php">Administración de Horarios</a></li>
                      
                            <li><a class="dropdown-item" href="adm_salas.php">Administracion de Salas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
      
          <?php } ?>
          <!--Dropdown-->
          </ul>
          <?php if (!isset($_SESSION["login"])) { ?>
            <li>
              <a href="login.php" class="nav-link--button">Iniciar Sesión</a>
            </li>
            <?php } ?>
            <?php if (isset($_SESSION["login"])) { ?>
                <li class="nav-item"><a class="nav-link" href="logout.php">Salir</a></li>
            <?php } ?>
            <?php if (isset($_SESSION["login"])) { ?>
                <li><a id="linkUsr" href=""><img class="imgUsr" src="img/usuarios/<?php echo $_SESSION["usuario"] ?>.jpg" alt=""></a></li>
            <?php } ?>
        </div>
      </div>
    </nav>
  </section>