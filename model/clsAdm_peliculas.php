<?php
require "conexion.php";

class clsAdm_peliculas extends clsConexion{

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

    
    public function insertar_pelicula($idpelicula_parametro, $titulo_parametro, $actor_principal_parametro, $actor_secundario_parametro, $director_parametro, $clasificacion_parametro, $duracion_parametro, $genero_parametro, $idioma_parametro, $sinopsis_parametro, $trailer_parametro, $estado_parametro) {

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                //Consulta
                $consulta_login = $dbh->prepare("INSERT INTO adm_pelicula(idpelicula, titulo, actor_principal, actor_secundario, director, clasificacion, duracion_minutos, genero, idioma, sinopsis, trailer, estado) VALUES(:idpelicula, :titulo, :actor_principal, :actor_secundario, :director, :clasificacion, :duracion, :genero, :idioma, :sinopsis, :trailer, :estado)");

                //Agregar Parametros
                $consulta_login->bindParam(":idpelicula", $idpelicula_parametro);
                $consulta_login->bindParam(":titulo", $titulo_parametro);
                $consulta_login->bindParam(":actor_principal", $actor_principal_parametro);
                $consulta_login->bindParam(":actor_secundario", $actor_secundario_parametro);
                $consulta_login->bindParam(":director", $director_parametro);
                $consulta_login->bindParam(":clasificacion", $clasificacion_parametro);
                $consulta_login->bindParam(":duracion", $duracion_parametro);
                $consulta_login->bindParam(":genero", $genero_parametro);
                $consulta_login->bindParam(":idioma", $idioma_parametro);
                $consulta_login->bindParam(":sinopsis", $sinopsis_parametro);
                $consulta_login->bindParam(":trailer", $trailer_parametro);
                $consulta_login->bindParam(":estado", $estado_parametro);


                // Ejecutar
                $consulta_login->execute();
                $estado = true;
                echo "se ingresaron los datos";
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
                echo 'Lo sentimos, nos encontramos teniendo inconvenientes';
            } finally {
                $dbh = null;
                return $estado;
            }
        }
    }


    public function insertar_horario($adm_pelicula_idpelicula_parametro, $fecha_parametro, $hora_parametro, $tipo_sala_parametro, $precio_parametro) {

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                //Consulta
                $consulta_login = $dbh->prepare("INSERT INTO adm_horario (fecha, hora, tipo_sala, precio, adm_pelicula_idpelicula) VALUES(:fecha, :hora, :tipo_sala, :precio, :adm_pelicula_idpelicula)");

                //Agregar Parametros
                $consulta_login->bindParam(":fecha", $fecha_parametro);
                $consulta_login->bindParam(":hora", $hora_parametro);
                $consulta_login->bindParam(":tipo_sala", $tipo_sala_parametro);
                $consulta_login->bindParam(":precio", $precio_parametro);
                $consulta_login->bindParam(":adm_pelicula_idpelicula", $adm_pelicula_idpelicula_parametro);


                // Ejecutar
                $consulta_login->execute();
                $estado = true;
                echo "se ingresaron los datos";
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
                echo 'Lo sentimos, nos encontramos teniendo inconvenientes';
            } finally {
                $dbh = null;
                return $estado;
            }
        }
    }

        public function verificar_siexite_pelicula($idpelicula_parametro){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $condicion = false;
                $consulta = $dbh->prepare("SELECT idpelicula FROM adm_pelicula where idpelicula = :idpelicula");
                
                $consulta->bindParam(":idpelicula", $idpelicula_parametro);
    
                // Conseguir arreglo asociativo
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
    
                $contador = $consulta -> rowCount();
    
                if($contador==1){
                    $condicion = true;
                }
                
                }
                $dbh=null;
                
                // Si el usuario exite entonces enviar true, caso contrario false
                return $condicion;
            }


        public function crearImagenesCartelera(){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT idpelicula FROM adm_pelicula");
                //determinar el motos de fetch
                $consulta->setFetchMode(PDO::FETCH_ASSOC); //resultado como un arreglo asociativo
                $consulta->execute();
                $filas = "";

                foreach ($consulta as $key => $v) {
                    // .= es para concatenar
                    $filas .= "
                            <div class='pelicula' type='submit'>
                                <a href='detallePelicula.php?pelicula=$v[idpelicula]'>
                                        <img src='img/peliculas/$v[idpelicula].jpg'>
                                </a>
                            </div>
                    ";
                }
                $dbh=null;
                return $filas;
        }
    }


    // Esto aun esta en proceso para colocarlo en detallePelicula
    public function seleccionarDatosPelicula($idpelicula){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT idpelicula FROM adm_pelicula");
            //determinar el motos de fetch
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $filas = "";

            foreach ($consulta as $key => $v) {
                
                $filas .= "
                            <a href='detallePelicula.php?pelicula=$v[idpelicula]'>
                                <div class='pelicula' type='submit'>
                                    <img src='img/peliculas/$v[idpelicula].jpg'>
                                </div>
                            </a>
                ";
            }
            $dbh=null;
            return $filas;
    }
}






}
    
?>