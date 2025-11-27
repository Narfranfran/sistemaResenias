<?php

class Jugador {

    public $nick;
    public $nivel;
    public $equipo;

    
    public function __construct($nick, $nivel, $equipo = "Sin Equipo") {
        $this->nick = $nick;
        $this->nivel = $nivel;
        $this->equipo = $equipo;
    }
}
