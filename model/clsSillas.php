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

        public function insertar_compra($monto, $asientos, $pelicula, $fecha, $hora, $usuario) {
        

            $dbh = $this->conectar();
            if ($dbh != null) {
                try {
                    
                    $consulta_login = $dbh->prepare("INSERT INTO compra (monto, asientos, pelicula, fecha, hora, tlogin_usuario) VALUES(:monto, :asientos, :pelicula, :fecha, :hora, :tlogin_usuario)");
    
                    
                    $consulta_login->bindParam(":monto", $monto);
                    $consulta_login->bindParam(":asientos", $asientos);
                    $consulta_login->bindParam(":pelicula", $pelicula);
                    $consulta_login->bindParam(":fecha", $fecha);
                    $consulta_login->bindParam(":hora", $hora);
                    $consulta_login->bindParam(":tlogin_usuario", $usuario);
    
    
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

        public function crearFilasCompra($usuario){

            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT idcompra, pelicula, fecha, hora, asientos, monto from compra where tlogin_usuario = '$usuario'");
                

                try{
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $consulta->execute();
                $filas = "";
    
                foreach ($consulta as $key => $v) {
                    $filas .= " <tr>
                   
                                    <th scope='col'>$v[idcompra]</th>
                                    <th scope='col'>$v[pelicula]</th>
                                    <th scope='col'>$v[fecha]</th>
                                    <th scope='col'>$v[hora]</th>
                                    <th scope='col'>$v[asientos]</th>
                                    <th scope='col'>$v[monto]</th>
                                    
                
                                </tr>";}
                                
                            
                }catch(PDOException $e){
                    $e->getMessage();
                }finally{
                    $dbh=null;
                    return $filas;
                }
                
                
            }
        }

        public function obtenerPelicula($idpelicula){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT titulo from adm_pelicula where idpelicula = $idpelicula");

                
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $consulta->execute();
                $salida ="";
    
                foreach ($consulta as $key => $v) {
                   $salida = $v['titulo'];
                            
                }
                $dbh=null;
                return $salida;
            }
        }

        public function obtenerHora($idhora){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT hora from adm_horario where idhorario  = $idhora");

                
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $consulta->execute();
                $salida ="";
    
                foreach ($consulta as $key => $v) {
                   $salida = $v['hora'];
                            
                }
                $dbh=null;
                return $salida;
            }
        }

        public function obtenerFecha($idhora){
            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT fecha from adm_horario where idhorario = $idhora");

                
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $consulta->execute();
                $salida ="";
    
                foreach ($consulta as $key => $v) {
                   $salida = $v['fecha'];
                            
                }
                $dbh=null;
                return $salida;
            }
        }


        public function obtenerIdCompra($pelicula, $fecha, $hora) {
        

            $dbh = $this->conectar();
            if ($dbh != null) {
                $consulta = $dbh->prepare("SELECT idcompra from compra where pelicula = '$pelicula' and fecha = '$fecha' and hora = '$hora'");

                
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $consulta->execute();
                $salida ="";
    
                foreach ($consulta as $key => $v) {
                   $salida = $v['idcompra'];
                            
                }
                $dbh=null;
                return $salida;
            }
        }

        
}
    
?>