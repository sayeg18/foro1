<?php
include "conexion.php";
class Operacionesforo{
    private $objConex;
    private $mysqli;
    public $comentarioList=array();
     //Constructor
    public function __construct()
    {
      $this->objConex=new Conexion;
      $this->objConex->conectar();
      $this->mysqli=$this->objConex->mysqli;
    }
    public function addListaComentarios(){
    	$query="SELECT * FROM comentario"; //consulta
    	$stmt = $this->mysqli -> prepare($query);
        $stmt -> execute();
        $resultado=$stmt->get_result();
         while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
         	$objComentario=new stdClass();
         	$objComentario->nombre=$fila['nombre'];
         	$objComentario->tema=$fila['tema'];
         	$objComentario->comentario=$fila['comentario'];
         	$this->comentarioList[]=$objComentario;
         }
   	 }
    public function obtenerComentarios(){
          	$this->addListaComentarios();
        		//Retornar la lista
        		return $this->comentarioList;
          }
    public function registrarCometarios($nombre, $tema, $comentario){
        $salidaError=null;
       $query="INSERT INTO comentario (nombre, tema, comentario) VALUES (?,?,?)";//Consulta
       $stmt = $this->mysqli -> prepare($query); //peparamos la nsulta
        $stmt -> bind_param('sss',$nombre, $tema, $comentario); //enviamos los paràmetros
        $stmt -> execute();
         $salidaError=$stmt ->error;
         $stmt->close();
        //$this->enviarCorreo($email);
        return $salidaError;
    }
}
?>