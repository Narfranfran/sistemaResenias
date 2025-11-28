<?php
include_once 'config.php';
require_once 'Jugador.php';
require_once 'GestorTorneo.php';

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['inscribir']){
        if (!empty($_POST['nick']) && !empty($_POST['nivel'])) {

            // Creamos el objeto
            $nuevoJugador = new Jugador($_POST['nick'], $_POST['nivel'], $_POST['equipo']);

            // Guardamos
            $gestor = new GestorTorneo('inscripciones.txt');
            $gestor->guardar($nuevoJugador);

            $mensaje = "¡Jugador inscrito correctamente!";
        } else {
            $mensaje = "Error: El Nick y el Nivel son obligatorios.";
        }
    } elseif($_POST['bbdd']){
        // Lógica para volcar a base de datos
        
    } elseif($_POST['reiniciar']){
        // Lógica para reiniciar fichero
        if (file_exists('inscripciones.txt')) {
            unlink('inscripciones.txt');
            $mensaje = "Fichero reiniciado correctamente.";
        } else {
            $mensaje = "El fichero no existe, nada que reiniciar.";
        }
    }

}



include 'vista.php';