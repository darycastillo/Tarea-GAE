<?php
include "conexionBD.php";
$valor=(int)$_POST['seleccion'];
$stm=$conn->prepare("DELETE FROM tb_tareas WHERE tarea_id=?");
$stm->bind_param('s',$valor);
$stm->execute();
if($stm->affected_rows>0)
{
    echo '
            <script type="text/javascript"> 
            alert("BORRADO");
            window.location.href="../index.php";
            </script>
        ';
    //header('Location: ../index.php');
}else
{
    echo '
            <script type="text/javascript"> 
            alert("Error");
            window.location.href="../index.php";
            </script>
        ';
}
$stm->close();
$conn->close();