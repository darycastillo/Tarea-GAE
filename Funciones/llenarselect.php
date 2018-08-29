<?php
include 'conexionBD.php';
$query=$conn->query("Select * from tb_tareas");
while($valores=mysqli_fetch_array($query))
{
    echo '
            <option value="'.$valores['tarea_id'].'">'.$valores['descripcion'].'</option>
         ';
}

