<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    include "operacionesforo.php";
    ini_set('error_reporting', E_ALL);
    $objComentario=new operacionesforo;
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
         echo json_encode ($objComentario->obtenerComentarios());
        break;
        case 'POST':
            $mensaje= $objComentario->registrarCometarios($_REQUEST['nombre'], $_REQUEST['tema'], $_REQUEST['comentario']);
             echo json_encode(array(
                    'message' => $mensaje));
        break;
    }
   ?>