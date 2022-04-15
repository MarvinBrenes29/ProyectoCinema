<?php
include "model/clsAdm_peliculas.php";
$idhorario= $_GET["idhorario"];
$v=new clsAdm_peliculas();



  $v->eliminar_horario($idhorario);


  header("Location:adm_horarios.php");

?>