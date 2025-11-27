<?php
require_once 'Jugador.php';

class GestorTorneo{
    private $archivo;

    public function __construct($ruta)
    {
        $this->archivo = $ruta;
    }

    public function guardar (Jugador $jugador){
        //Obtenemos el string formateado del objeto 
        $linea = $jugador->getFormatoFichero() . PHP_EOL;
        //Escribijmos al final del fichero con bloqueo de seguridad
        file_put_contents($this->archivo, $linea, FILE_APPEND | LOCK_EX);
    }

    public function obtenerInscritos(){
        if(!file_exists($this->archivo)){
            return [];
        }
        
        $listaJugadores = [];
        //Leemos ignorando saltos de línea y líneas vacías
        $lineas = file($this->archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach($lineas as $linea){
            //Separamos por el guion " - "
            $datos = explode(" | ", $linea);

            if(count($datos) == 3){
                //Reconstruimos el objeto
                $listaJugadores[] = new Jugador($datos[0], $datos[1], $datos[2]);
            }
        }
        return $listaJugadores;
    }
}