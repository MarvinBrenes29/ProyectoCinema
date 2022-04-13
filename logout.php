<?php 
    session_start();
    //eliminar las variables de sesion
    session_unset();
    //destruit session

    session_destroy();

    header("Location: index.php");

?>