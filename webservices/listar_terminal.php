<?php

    include("connection_db.php");

    $query = "SELECT id,nombre FROM terminal";

        try {
            $link=conexion();    
            $comando = $link->prepare($query);
            // Ejecutar sentencia preparada
            $comando->execute();
            
            $terminales = array(); 
           
           while ($temp = $comando->fetch(PDO::FETCH_ASSOC)) {
                $temp['id'];
                $temp['nombre'];
                
                array_push($terminales, $temp);
		
    			$datos[] = array_map("utf8_encode", $temp);
      	        header('Content-type: application/json; charset=utf-8');
             }
             
             echo json_encode($datos, JSON_UNESCAPED_UNICODE);
           
        
        } catch (PDOException $e) {
            return false;
        }

?>