
<?php
require "conexion.php";

class clsMapa extends clsConexion{

     

     public function __construct()
     {
     }
 
  

    public function obtenerlatitud($provincia){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT latitud from mapa where provincia = '$provincia'");

            
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $salida =0;

            foreach ($consulta as $key => $v) {
               $salida = $v['latitud'];
                        
            }
            $dbh=null;
            return $salida;
        }
    }

    public function obtenerlongitud($provincia){
        $dbh = $this->conectar();
        if ($dbh != null) {
            $consulta = $dbh->prepare("SELECT longitud from mapa where provincia = '$provincia'");

            
            $consulta->setFetchMode(PDO::FETCH_ASSOC); 
            $consulta->execute();
            $salida =0;

            foreach ($consulta as $key => $v) {
               $salida = $v['longitud'];
                        
            }
            $dbh=null;
            return $salida;
        }
    }



}
    
?>