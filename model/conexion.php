<?php 
    class clsConexion
    {
        
        protected function conectar()
        {
            $server = "localhost:3308";
            $db = "bdrentapp";
            $usr = "usrRentaapp";
            $pass = "123";
    
            try {
                //1-definir la cadena de conexion
                $con_string = "mysql:host=$server;dbname=$db";
                //2-instanciar el objeto PDO
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