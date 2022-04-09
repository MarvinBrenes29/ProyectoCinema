<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,100&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <title>Cinema</title>
</head>

<body>

  <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top mt-10 ">
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Administración
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Administración de banners</a>
              <a class="dropdown-item" href="#">Administración de Salas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Administración de Películas</a>
              <a class="dropdown-item" href="#">Administración de Horarios</a>
            </div>
          </li>

          <li class="nav-item">
            <a href="login.php" class="nav-link--button">Iniciar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>