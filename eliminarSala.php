<?php
include "model/clsAdm_peliculas.php";
$nombreSala= $_GET["nombreSala"];
$v=new clsAdm_peliculas();

  $v->eliminar_sala($nombreSala);
  header("Location:adm_salas.php");

?>