<?php
require "conexion.php";

class clsProcesoCompra extends clsConexion{

     //atributos
     public $idpelicula;
     public $titulo;
     public $actor_principal;
     public $actor_secundario;
     public $director;
     public $clasificacion;
     public $duracion;
     public $genero;
     public $idioma;
     public $sinopsis;
     public $trailer;
     public $estado;
     public $nombreSala;
     public $tipo_sala;
     public $estado_sala;

     public function __construct()
     {
     }
 
     public static function constructorParametro($idpelicula, $titulo, $actor_principal, $actor_secundario, $director, $clasificacion, $duracion, $genero, $idioma, $sinopsis, $trailer, $estado) {

         $dato = new clsLogin();
         $dato->idpelicula = $idpelicula;
         $dato->titulo = $titulo;
         $dato->actor_principal = $actor_principal;
         $dato->actor_secundario = $actor_secundario;
         $dato->director = $director;
         $dato->clasificacion = $clasificacion;
         $dato->duracion = $duracion;
         $dato->genero = $genero;
         $dato->idioma = $idioma;
         $dato->sinopsis = $sinopsis;
         $dato->trailer = $trailer;
         $dato->estado = $estado;

         return $dato;

     }

     public function crearImagenesCartelera($idpelicula_parametro){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT idpelicula, sinopsis, director, actor_principal, actor_secundario, duracion_minutos, clasificacion, titulo, trailer FROM adm_pelicula where idpelicula=$idpelicula_parametro");
            
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $filas = "";

            foreach ($consulta as $key => $v) {
                $this->idpelicula = $v['idpelicula'];
                $this->sinopsis = $v['sinopsis'];
                $this->director = $v['director'];
                $this->actor_principal = $v['actor_principal'];
                $this->actor_secundario = $v['actor_secundario'];
                $this->duracion = $v['duracion_minutos'];
                $this->clasificacion = $v['clasificacion'];
                $this->titulo = $v['titulo'];
                $this->trailer = $v['trailer'];
            }


            $dbh=null;
        }
    }

    public function buscarFechas($idpelicula){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT fecha, idhorario, hora FROM adm_horario where adm_pelicula_idpelicula = $idpelicula order by fecha");
            
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $filas = "";
            $fecha_anterior = "";
            $contador = 0;

            foreach ($consulta as $key => $v) {


                if($fecha_anterior != $v['fecha'] && $contador == 0){

                    $filas .= "

                        <div class='row'>
                        <div class='col'>
                            <!-- Columna 1 -->
                            <div class='card' style='width: 18rem;'>
                                <div class='card-body'>
                                    <h4 mx-auto>$v[fecha]</h4>
                                    <h5 class='card-title'>Horarios</h5>
                                    <a class='btn btn-primary' href='sillas.php?idhorario=$v[idhorario]' role='button'>$v[hora]</a>
                
                
                    ";
                    $fecha_anterior = $v['fecha'];
                    $contador = 1;

                }else if($fecha_anterior != $v['fecha']){

                    $filas .= "
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class='row'>
                        <div class='col'>
                            <!-- Columna 1 -->
                            <div class='card' style='width: 18rem;'>
                                <div class='card-body'>
                                    <h4 mx-auto>$v[fecha]</h4>
                                    <h5 class='card-title'>Horarios</h5>
                                    <a class='btn btn-primary' href='sillas.php?idhorario=$v[idhorario]' role='button'>$v[hora]</a>
                
                
                    ";




                }else if ($fecha_anterior == $v['fecha']){

                    $filas .= "

                            <a class='btn btn-primary' href='sillas.php?idhorario=$v[idhorario]' role='button'>$v[hora]</a>
                
                
                    ";
                    $fecha_anterior = $v['fecha'];

                }
            }

            $filas .= "
                        </div>
                        </div>
                    </div>
                    </div>
            ";


            $dbh=null;
            return $filas;
        }
    
    }



}
    
?>