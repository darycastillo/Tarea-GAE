<?php
include 'conexionBD.php';

$query=$conn->query("SELECT * FROM tb_tareas");
while($valores=mysqli_fetch_array($query))
{
    echo '
            <tr>
                <td>'.$valores['descripcion'].'</td>
            </tr>
        ';
}