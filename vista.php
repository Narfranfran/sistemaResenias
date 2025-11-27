<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Inscripcion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 22px;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        /* Mensaje debajo del título */
        #mensaje {
            font-weight: bold;
            color: green;
            margin-bottom: 15px;
        }

        /* Botones de acciones */
        input[type="submit"][value="Volcar a Base de Datos"] {
            background-color: #0099ff;
            color: white;
            padding: 12px 25px;
            font-size: 15px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 20px;
        }

        input[type="submit"][value="Reiniciar Fichero"] {
            background-color: #ff5722;
            color: white;
            padding: 12px 25px;
            font-size: 15px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Campos */
        #nick,
        #nivel,
        #equipo {
            padding: 6px;
            margin-right: 20px;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <h1>Gestor de Inscripciones (File-to-DB)</h1>
    <br>
    <?php
    echo $mensaje;
    ?>
    <br>
    <form method="post">
        <h2>Acciones del Torneo</h2>
        <input type="submit" value="Volcar a Base de Datos">
        <input type="submit" value="Reiniciar Fichero">
        <br>
        <h2>Inscribir Jugador</h2>
        <label for="nick">Nickname:</label>
        <input type="text" name="nick" id="nick" placeholder="Ej: Faker" required>
        <label for="nivel">Nivel:</label>
        <select name="nivel" id="nivel">
            <option value="principiante" selected>Principiante (Hierro - Oro)</option>
            <option value="intermedio">Intermedio (Platino - Diamante)</option>
            <option value="experto">Experto (Master - Challenger)</option>
        </select>
        <label for="equipo">Nombre del Equipo (Opcional)</label>
        <input type="text" name="equipo" id="equipo" placeholder="Ej: T1" required>
        <br>
        <input type="submit" value="INSCRIBIRSE AL FICHERO">
    </form>
</body>

</html>