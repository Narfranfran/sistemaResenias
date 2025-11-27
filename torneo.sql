--  base de datos
CREATE DATABASE IF NOT EXISTS torneo
USE torneo;

CREATE TABLE IF NOT EXISTS jugadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(100) NOT NULL,
    nivel VARCHAR(50) NOT NULL,
    equipo VARCHAR(100) NOT NULL DEFAULT 'Sin Equipo'
);
