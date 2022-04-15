<?php
include "shared/header.php";
include "model/clsAdm_peliculas.php";
$idpelicula=$_GET["idpelicula"];
$v=new clsAdm_peliculas();

$res=$v->consultarPelicula($idpelicula);

if($_POST){
  echo "pos";
  $v-> idpelicula = $_POST["idpelicula"];
  $v->eliminar_pelicula();
  header("Location:adm_peliculas.php");
}
?>

<main>
    <div class="d-flex flex-column container mb-30 pt-5">
        <h1 class="p-2 bd-highlight">Esta Seguro que quiere eliminar este Registro?</h1>
        <h2 class="p-2 bd-highlight">Los datos no se podrán recuperar</h2>
        <div class="p-2 bd-highlight">
            <form method="POST" action="" class="w-40 m-auto mt-5 mx-auto">
                <input name="idpelicula" type="hidden" value="<?php echo $res->idpelicula?>">
                <input class="btn btn-danger" type="submit" value="Sí">
                <button class="btn btn-dark" type="submit">Regresar</button>
            </form>
        </div>
</main>

<?php include "shared/footer.php" ?>