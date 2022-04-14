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

public function crearFilasPeliculas(){

        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT idpelicula, titulo, actor_principal, actor_secundario, director, clasificacion, duracion_minutos, genero, idioma, sinopsis, trailer, estado  FROM adm_pelicula");
            //determinar el motos de fetch
            $consulta->setFetchMode(PDO::FETCH_ASSOC); //resultado como un arreglo asociativo
            $consulta->execute();
            $filas = "";

            foreach ($consulta as $key => $v) {
                // .= es para concatenar
                $filas .= "<tr>
                                <td scope='col' ><img class='crudPeli' src='img/peliculas/$v[idpelicula].jpg' alt=''></td>
                                <td scope='col'>$v[idpelicula]</td>
                                <td scope='col'>$v[titulo]</td>
                                <td scope='col'>$v[actor_principal]</td>
                                <td scope='col'>$v[actor_secundario]</td>
                                <td scope='col'>$v[director]</td>
                                <td scope='col'>$v[clasificacion]</td>
                                <td scope='col'>$v[duracion_minutos]</td>
                                <td scope='col'>$v[genero]</td>
                                <td scope='col'>$v[idioma]</td>
                                <td scope='col'>$v[sinopsis]</td>
                                <td scope='col'>$v[trailer]</td>
                                <td scope='col'>$v[estado]</td>
                                <td scope='col'>
                                    <a href='modificarPelicula.php?idpelicula=$v[idpelicula]' class='btn btn-warning'><i class='fas fa-pencil-alt'></i></a>
                                    <a href='eliminarPelicula.php?idpelicula=$v[idpelicula]' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>
                                </td>
                            </tr>";
            }
            $dbh=null;
            return $filas;
        }
    }

    public function consultarPelicula($idpelicula){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT idpelicula, titulo, actor_principal, actor_secundario, director, clasificacion, duracion_minutos, genero, idioma, sinopsis, trailer, estado  FROM adm_pelicula where idpelicula=$idpelicula");

            
            $consulta->execute();
            $res=$consulta->fetchAll(PDO::FETCH_OBJ);
            $dbh=null;
            
            return $res[0];
        }
    }

    public function eliminar_pelicula(){

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                

                $consulta = $dbh->prepare("DELETE FROM adm_pelicula 
                                            WHERE idpelicula = :idpelicula");

               
                $consulta->bindParam(":idpelicula", $this->idpelicula);

                
                $consulta->execute();
                $estado = true;
                if(file_exists('img/peliculas/'.$this->idpelicula.'.jpg')){
                    unlink('img/peliculas/'.$this->idpelicula.'.jpg');
                }
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
                echo $e;
            } finally {
                //cerrar la conexion a la bd
                $dbh = null;
                return $estado;
            }
        }
    }

    public function modificar_pelicula(){

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                

                $consulta = $dbh->prepare("UPDATE adm_pelicula SET titulo=:titulo, actor_principal=:actor_principal, actor_secundario=:actor_secundario, director=:director, clasificacion=:clasificacion, duracion_minutos=:duracion_minutos, genero=:genero, idioma=:idioma, sinopsis=:sinopsis, trailer=:trailer, estado=:estado WHERE idpelicula=:idpelicula");

               
                
                $consulta->bindParam(":titulo", $this->titulo);
                $consulta->bindParam(":actor_principal", $this->actor_principal);
                $consulta->bindParam(":actor_secundario", $this->actor_secundario);
                $consulta->bindParam(":director", $this->director);
                $consulta->bindParam(":clasificacion", $this->clasificacion);
                $consulta->bindParam(":duracion_minutos", $this->duracion);
                $consulta->bindParam(":genero", $this->genero);
                $consulta->bindParam(":idioma", $this->idioma);
                $consulta->bindParam(":sinopsis", $this->sinopsis);
                $consulta->bindParam(":trailer", $this->trailer);
                $consulta->bindParam(":estado", $this->estado);
                $consulta->bindParam(":idpelicula", $this->idpelicula);

                
                $consulta->execute();
                $estado = true;
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
            } finally {
                $dbh = null;
                return $estado;
            }
        }
    }
// ----------------------------------------------------------------------------------SALAS
    public function verificar_siexite_sala($nombreSala_parametro){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $condicion = false;
            $consulta = $dbh->prepare("SELECT nombreSala FROM adm_sala where nombreSala = :nombreSala");
            
            $consulta->bindParam(":nombreSala", $nombreSala_parametro);

            // Conseguir arreglo asociativo
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();

            $contador = $consulta -> rowCount();

            if($contador==1){
                $condicion = true;
            }
            
            }
            $dbh=null;
            
            
            return $condicion;
        }


    public function insertar_sala($nombreSala_parametro, $tipo_sala_parametro, $estado_parametro) {

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                
                $consulta_login = $dbh->prepare("INSERT INTO adm_sala (nombreSala, tipo_sala, estado) VALUES(:nombreSala, :tipo_sala, :estado)");

                
                $consulta_login->bindParam(":nombreSala", $nombreSala_parametro);
                $consulta_login->bindParam(":tipo_sala", $tipo_sala_parametro);
                $consulta_login->bindParam(":estado", $estado_parametro);
                


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


    public function crearFilasSalas(){

        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT nombreSala, tipo_sala, estado FROM adm_sala");

            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $filas = "";

            foreach ($consulta as $key => $v) {
                $filas .= "<tr>
                                
                                <td scope='col'>$v[nombreSala]</td>
                                <td scope='col'>$v[tipo_sala]</td>
                                <td scope='col'>$v[estado]</td>
                                <td scope='col'>
                                    <a href='modificarSala.php?nombreSala=$v[nombreSala]' class='btn btn-warning'><i class='fas fa-pencil-alt'></i></a>
                                    <a href='eliminarSala.php?nombreSala=$v[nombreSala]' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>
                                </td>
                            </tr>";
            }
            $dbh=null;
            return $filas;
        }
    }

    public function modificar_sala(){

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                

                $consulta = $dbh->prepare("UPDATE adm_sala SET nombreSala=:nombreSala, tipo_sala=:tipo_sala, estado=:estado WHERE nombreSala=:nombreSala");

                
                $consulta->bindParam(":nombreSala", $this->nombreSala);
                $consulta->bindParam(":tipo_sala", $this->tipo_sala);
                $consulta->bindParam(":estado", $this->estado_sala);

                
                $consulta->execute();
                $estado = true;
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
            } finally {
                $dbh = null;
                return $estado;
            }
        }
    }

    public function consultarSala($nombreSala_parametro){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT nombreSala, tipo_sala, estado FROM adm_sala where nombreSala=$nombreSala_parametro");

            
            $consulta->execute();
            $res=$consulta->fetchAll(PDO::FETCH_OBJ);
            
            $dbh=null;
            
            return $res[0];
        }
    }

    public function eliminar_sala($nombreSala){

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                

                $consulta = $dbh->prepare("DELETE FROM adm_sala
                                            WHERE nombreSala = :nombreSala");

               
                $consulta->bindParam(":nombreSala", $nombreSala);

                
                $consulta->execute();
                $estado = true;
                
            } catch (PDOException $e) {
                $estado = false;
                $e->getMessage();
                echo $e;
            } finally {
                //cerrar la conexion a la bd
                $dbh = null;
                return $estado;
            }
        }
    }


}
    
?>