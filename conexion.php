<?php
    class Conexion{
        //Atributos de conexión
        var $servidor="localhost"; //IP de la instancia MySQL
        var $usuario="root";//usuario de la BD MySQL
        var $contra="";//Contraseña del usuario MySQL
        var $database="foro";
        var $mysqli;
     function conectar(){
         $this->mysqli=new mysqli($this->servidor,$this->usuario,$this->contra,$this->database);
         if(!$this->mysqli)//VAlidamos la conexión exitosa
         {
            die('Conexión Fallida:'.$this->mysqli->error());
         }
     }
     function conectarDos(){
        return $con = mysqli_connect($this->servidor,$this->usuario,$this->contra,$this->database);
     }
    }
?>