<?php

    class BaseDatos{
        
        private $host='localhost';
        private $db='usuarios';
        private $user='vigupe01';
        private $pass='';
        private $conexion;
        
    function __construct(){
        $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
   
    function compruebaConex(){
         if($this->conexion->connect_errno){
            echo "Fallo al conectar a mysql: (" . $this->conexion->connect_errno . ") " .$this->conexion->connect_error;
        }
    }
    
    function comprobarUser($nombre){
    
        $sql = "SELECT * FROM usuario WHERE nombre='$nombre'";
        $result = $this->conexion->query($sql);
        $fila= $result->fetch_assoc();
           if($fila!=null){
            return $fila;
        }else{
            return false;
        }    
    } 
    
     function insertarUser($nombre,$apellido,$edad){
        
        $sql = "INSERT INTO usuario (nombre,apellidos,edad)
        VALUES ('$nombre','$apellido','$edad')";
        $this->conexion->query($sql);
        return $mysqli->insert_id;
        
    }
    
    function actualizaUser($puntos, $nombre){
        $sql = "UPDATE usuario SET puntos='$puntos' WHERE nombre='$nombre'";
        $this->conexion->query($sql);
    }
}    

?>


