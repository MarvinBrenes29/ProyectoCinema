<?php
require_once "conexion.php";

class clsSillas  extends clsConexion{

     //atributos
     public $A1;
     public $A2;
     public $A3;
     public $A4;
     public $A5;
     public $A6;
     public $A7;
     public $A8;
     public $B1;
     public $B2;
     public $B3;
     public $B4;
     public $B5;
     public $B6;
     public $B7;
     public $B8;
     public $C1;
     public $C2;
     public $C3;
     public $C4;
     public $C5;
     public $C6;
     public $C7;
     public $C8;
     public $D1;
     public $D2;
     public $D3;
     public $D4;
     public $D5;
     public $D6;
     public $D7;
     public $D8;
     public $E1;
     public $E2;
     public $E3;
     public $E4;
     public $E5;
     public $E6;
     public $E7;
     public $E8;
     public $F1;
     public $F2;
     public $F3;
     public $F4;
     public $F5;
     public $F6;
     public $F7;
     public $F8;


     

     public function __construct()
     {
     }

     public function crear_sillas($idhorario_parametro) {

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                
                $consulta_login = $dbh->prepare("INSERT INTO sillas(A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, B5, B6, B7, B8, C1, C2, C3, C4, C5, C6, C7, C8, D1, D2, D3, D4, D5, D6, D7, D8, E1, E2, E3, E4, E5, E6, E7, E8, F1, F2, F3, F4, F5, F6, F7, F8, adm_horario_idhorario) VALUES(:A1, :A2, :A3, :A4, :A5, :A6, :A7, :A8, :B1, :B2, :B3, :B4, :B5, :B6, :B7, :B8, :C1, :C2, :C3, :C4, :C5, :C6, :C7, :C8, :D1, :D2, :D3, :D4, :D5, :D6, :D7, :D8, :E1, :E2, :E3, :E4, :E5, :E6, :E7, :E8, :F1, :F2, :F3, :F4, :F5, :F6, :F7, :F8, :idhorario)");

                
                $consulta_login->bindParam(":A1", "seat"); 
                $consulta_login->bindParam(":A2", "seat");
                $consulta_login->bindParam(":A3", "seat");
                $consulta_login->bindParam(":A4", "seat");
                $consulta_login->bindParam(":A5", "seat");
                $consulta_login->bindParam(":A6", "seat");
                $consulta_login->bindParam(":A7", "seat");
                $consulta_login->bindParam(":A8", "seat");
                $consulta_login->bindParam(":B1", "seat");
                $consulta_login->bindParam(":B2", "seat");
                $consulta_login->bindParam(":B3", "seat");
                $consulta_login->bindParam(":B4", "seat");
                $consulta_login->bindParam(":B5", "seat");
                $consulta_login->bindParam(":B6", "seat");
                $consulta_login->bindParam(":B7", "seat");
                $consulta_login->bindParam(":B8", "seat");
                $consulta_login->bindParam(":C1", "seat");
                $consulta_login->bindParam(":C2", "seat");
                $consulta_login->bindParam(":C3", "seat");
                $consulta_login->bindParam(":C4", "seat");
                $consulta_login->bindParam(":C5", "seat");
                $consulta_login->bindParam(":C6", "seat");
                $consulta_login->bindParam(":C7", "seat");
                $consulta_login->bindParam(":C8", "seat");
                $consulta_login->bindParam(":D1", "seat");
                $consulta_login->bindParam(":D2", "seat");
                $consulta_login->bindParam(":D3", "seat");
                $consulta_login->bindParam(":D4", "seat");
                $consulta_login->bindParam(":D5", "seat");
                $consulta_login->bindParam(":D6", "seat");
                $consulta_login->bindParam(":D7", "seat");
                $consulta_login->bindParam(":D8", "seat");
                $consulta_login->bindParam(":E1", "seat");
                $consulta_login->bindParam(":E2", "seat");
                $consulta_login->bindParam(":E3", "seat");
                $consulta_login->bindParam(":E4", "seat");
                $consulta_login->bindParam(":E5", "seat");
                $consulta_login->bindParam(":E6", "seat");
                $consulta_login->bindParam(":E7", "seat");
                $consulta_login->bindParam(":E8", "seat");
                $consulta_login->bindParam(":F1", "seat");
                $consulta_login->bindParam(":F2", "seat");
                $consulta_login->bindParam(":F3", "seat");
                $consulta_login->bindParam(":F4", "seat");
                $consulta_login->bindParam(":F5", "seat");
                $consulta_login->bindParam(":F6", "seat");
                $consulta_login->bindParam(":F7", "seat");
                $consulta_login->bindParam(":F8", "seat");
                $consulta_login->bindParam(":idhorario", $idhorario_parametro);


                
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

    public function eliminar_sillas($idhorario_parametro){

        $dbh = $this->conectar();
        if ($dbh != null) {
            try {
                

                $consulta = $dbh->prepare("DELETE FROM sillas
                                            WHERE idhorario = :idhorario");

               
                $consulta->bindParam(":idhorario", $idhorario_parametro);

                
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