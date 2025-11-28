<?php
include_once 'config.php';
require_once 'Jugador.php';
require_once 'GestorTorneo.php';

$mensaje = "";
$gestor  = new GestorTorneo('inscripciones.txt');

try {
    $conexion = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME . "; charset=utf8", $DB_USER, $DB_PASS);
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['inscribir'])) {
        if (! empty($_POST['nick']) && ! empty($_POST['nivel'])) {

            // Creamos el objeto
            $nuevoJugador = new Jugador($_POST['nick'], $_POST['nivel'], $_POST['equipo']);

            // Guardamos
            $gestor->guardar($nuevoJugador);

            $mensaje = "¡Jugador inscrito correctamente!";
        } else {
            $mensaje = "Error: El Nick y el Nivel son obligatorios.";
        }
    } elseif (isset($_POST['bbdd'])) {
        // Lógica para volcar a base de datos
        foreach($gestor->obtenerInscritos() as $jugador) {
            $consulta = $conexion->prepare("SELECT nick FROM jugadores WHERE nick = :nick");
            $consulta->execute(['nick' => $jugador->getNick()]);

            if ($consulta->rowCount() == 0) {
                $insercion = "INSERT INTO jugadores (nick, nivel, equipo) VALUES ('" . $jugador->getNick() . "', '" . $jugador->getNivel() . "', '" . $jugador->getEquipo() . "')";
                $conexion->exec($insercion);
            }
        }

        $conexion = null;

    } elseif (isset($_POST['reiniciar'])) {
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
