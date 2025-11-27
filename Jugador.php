<?php

class Jugador {

    protected $nick;
    protected $nivel;
    protected $equipo;
    
    public function __construct($nick, $nivel, $equipo = "Sin Equipo") {
        $this->nick = $nick;
        $this->nivel = $nivel;
        $this->equipo = $equipo;
    }
}
