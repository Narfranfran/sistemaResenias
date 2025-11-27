<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Inscripcion</title>
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
        <input type="text" name="nick" id="nick" placeholder="Ej: Faker">
        <label for="nivel">Nivel:</label>
        <select name="nivel" id="nivel">
            <option value="principiante" selected>Principiante (Hierro - Oro)</option>
            <option value="intermedio">Intermedio (Platino - Diamante)</option>
            <option value="experto">Experto (Master - Challenger)</option>
        </select>
        <label for="equipo">Nombre del Equipo (Opcional)</label>
        <input type="text" name="equipo" id="equipo" placeholder="Ej: T1">
        <br>
        <input type="submit" value="INSCRIBIRSE AL FICHERO">
    </form>
</body>
</html>