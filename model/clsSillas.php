<?php
require "conexion.php";

class clsSillas extends clsConexion{

   

     public function __construct()
     {
     }
 
     public function insertar_asiento($silla, $idhorario) {
        

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                
                $consulta_login = $dbh->prepare("INSERT INTO sillas (silla, adm_horario_idhorario) VALUES(:silla, :adm_horario_idhorario)");

                
                $consulta_login->bindParam(":silla", $silla);
                $consulta_login->bindParam(":adm_horario_idhorario", $idhorario);


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

    public function costoEntrada($idhorario){

        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT precio FROM adm_horario where idhorario = $idhorario");
            
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $precio = 0;
            
            foreach ($consulta as $key => $v) {
                $precio = $v['precio'];
            }
            $dbh=null;
            return $precio;
        }
    }

    public function estado_silla($idhorario, $silla){
        $dbh = $this->conectar();
        if ($dbh != null) {
                $texto = "";
                $consulta = $dbh->prepare("SELECT silla FROM sillas where adm_horario_idhorario = :idhorario and silla = :silla");
                
                $consulta->bindParam(":idhorario", $idhorario);
                $consulta->bindParam(":silla", $silla);

            
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();

                $contador = $consulta -> rowCount();

                if($contador==1){
                    $texto = " sold";
                }
            
            }
            $dbh=null;
            
            
            return $texto;
        }

        public function insertar_compra($usuario, $idpelicula, $idhorario, $monto, $asientos) {
        

            $dbh = $this->conectar();
            if ($dbh != null) {
                try {
                    
                    $consulta_login = $dbh->prepare("INSERT INTO compra (tlogin_usuario, adm_pelicula_idpelicula, adm_horario_idhorario, monto, asientos) VALUES(:tlogin_usuario, :adm_pelicula_idpelicula, :adm_horario_idhorario, :monto, :asientos)");
    
                    
                    $consulta_login->bindParam(":tlogin_usuario", $usuario);
                    $consulta_login->bindParam(":adm_pelicula_idpelicula", $idpelicula);
                    $consulta_login->bindParam(":adm_horario_idhorario", $idhorario);
                    $consulta_login->bindParam(":monto", $monto);
                    $consulta_login->bindParam(":asientos", $asientos);
    
    
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

}
    
?>