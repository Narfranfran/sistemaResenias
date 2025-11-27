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

    /**
     * Get the value of nick
     */ 
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Get the value of equipo
     */ 
    public function getEquipo()
    {
        return $this->equipo;
    }
}
