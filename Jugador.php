<?php

class Jugador {

    protected $nick;
    protected $nivel;
    protected $equipo;
    
    public function __construct($nick, $nivel, $equipo = "Sin Equipo") {
        $this->nick = htmlspecialchars($nick);
        $this->nivel = htmlspecialchars($nivel);
        //Si no pone equipo, guargamos "Sin Equipo
        $this->equipo = empty($equipo) ? "Sin Equipo" : htmlspecialchars($equipo);
    }

    //Prepara el formato para guardar en el TXT
    public function getFormatoFichero(){
        return $this->nick . " | " . $this->nivel . " | " . $this->equipo;
    }
}
