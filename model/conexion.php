<?php 
    class clsConexion
    {
        
        protected function conectar()
        {
            $server = "localhost:3308";
            $db = "proyectocinema";
            $usr = "usrCinema";
            $pass = "123";
    
            try {
                
                $con_string = "mysql:host=$server;dbname=$db";
                $dbh = new PDO($con_string, $usr, $pass);
                // echo "Conexion exitosa";
                return $dbh;
            } catch (PDOException $e) {
                echo "Error de conexión a la base de datos";
                //muestra el error
                echo $e->getMessage();
                return null;
            }
        }
        
        
    }
    

    

?>