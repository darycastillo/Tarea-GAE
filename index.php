<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea</title>
</head>
<body>

<form method="post" action="Funciones/grabar.php">
    <fieldset>
        <legend>Ingres de Pendientes</legend>

            <label for="tarea">Agregar Tarea:</label>
            <input type="text" id="tarea" name="tarea" required>

        <input type="submit" value="Aceptar">
    </fieldset>
</form>

<br><br>

<fieldset>
    <table width="300">
        <thead>
            <th>Descripcion de la tarea</th>
        </thead>
        <tbody>
            <?php
            include 'Funciones/llenartabla.php';
            ?>
        </tbody>
    </table>
</fieldset>

<br><br>

<fieldset>
    <form method="post" action="Funciones/eliminar.php" >
    <select id="seleccion" name="seleccion">
        <?php
        include 'Funciones/llenarselect.php';
        ?>
    </select>
        <input type="submit" value="Eliminar">
    </form>
</fieldset>
</body>
</html>