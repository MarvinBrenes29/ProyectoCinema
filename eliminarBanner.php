<?php
include "model/clsAdm_peliculas.php";
$idbanner= $_GET["idbanner"];
$v=new clsAdm_peliculas();

  $v->eliminar_banner($idbanner);
  header("Location:adm_banners.php");

?>