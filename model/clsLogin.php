<?php
require "conexion.php";

class clsLogin extends clsConexion{

     //atributos
     public $usuario;
     public $nombre;
     public $apellido1;
     public $apellido2;
     public $telefono;
     public $fecha_nacimiento;
     public $foto;
     public $contrasenia;
     public $correo;
     public $administrador;

     public function __construct()
     {
     }
 
     public static function constructorParametro($usuario, $nombre, $apellido1, $apellido2, $telefono, $fecha_nacimiento, $contrasenia, $correo, $administrador) {

         $dato = new clsLogin();
         $dato->usuario = $usuario;
         $dato->contrasenia = $nombre;
         $dato->correo = $apellido1;
         $dato->apellido2 = $apellido2;
         $dato->telefono = $telefono;
         $dato->fecha_nacimiento = $fecha_nacimiento;
         $dato->nombre = $nombre;
         $dato->contrasenia = $contrasenia;
         $dato->correo = $correo;
         $dato->administrador = $administrador;
         return $dato;

     }

    
    public function insertar_usuario($usuario_parametro, $nombre_parametro, $apellido1_parametro, $apellido2_parametro, $telefono_parametro, $fecha_nacimiento_parametro, $contrasenia_parametro, $correo_parametro, $administrador_parametro) {

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                //Consulta
                $consulta_login = $dbh->prepare("INSERT INTO tlogin(usuario, nombre, apellido1, apellido2, telefono, fecha_nacimiento, contrasenia, correo, administrador) VALUES(:usuario, :nombre,
                :apellido1, :apellido2, :telefono, :fecha_nacimiento, md5(:contrasenia), :correo, :administrador)");

                //Agregar Parametros
                $consulta_login->bindParam(":usuario", $usuario_parametro);
                $consulta_login->bindParam(":nombre", $nombre_parametro);
                $consulta_login->bindParam(":apellido1", $apellido1_parametro);
                $consulta_login->bindParam(":apellido2", $apellido2_parametro);
                $consulta_login->bindParam(":telefono", $telefono_parametro);
                $consulta_login->bindParam(":fecha_nacimiento", $fecha_nacimiento_parametro);
                $consulta_login->bindParam(":contrasenia", $contrasenia_parametro);
                $consulta_login->bindParam(":correo", $correo_parametro);
                $consulta_login->bindParam(":administrador", $administrador_parametro);

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

    public function verificar_usuario($usuario_parametro, $contrasenia__parametro){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $condicion = 0;
            $consulta = $dbh->prepare("SELECT usuario, contrasenia, administrador FROM tlogin where usuario = :usuario and contrasenia = md5(:contrasenia)");
            
            $consulta->bindParam(":usuario", $usuario_parametro);
            $consulta->bindParam(":contrasenia", $contrasenia__parametro);

            // Conseguir arreglo asociativo
            try{
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            

            $contador = $consulta -> rowCount();

            if($contador==1){
                $condicion = 1;
                foreach ($consulta as $key => $valor){
                    if($valor['administrador'] == 1){
                        $condicion = 2;
                    } 
                }
            }
            }catch(PDOException $e){
                echo "error en verificar";
            }
            
            }
            // La base de datos se cierra aca
            $dbh=null;

            // Si las credenciales son incorrectas saldra 0
            // Correctas pero no administrador entonces saldra 1
            // Si es correcta y es administrador saldra 2
            return $condicion;
        }

        public function verificar_siexite($usuario_parametro){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $condicion = false;
                $consulta = $dbh->prepare("SELECT usuario, contrasenia, administrador FROM tlogin where usuario = :usuario");
                
                $consulta->bindParam(":usuario", $usuario_parametro);
    
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

}
    // Pruebas de clase
    // $v = new clsLogin();
    // $v->insertar_usuario("alsolis", "alberto", "solis", "cordoba", "84487506", "2022-04-11", "123", "cordoba@gmail.com", 0);
?>