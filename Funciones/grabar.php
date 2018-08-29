<?php
include 'conexionBD.php';
$stm=$conn->prepare("INSERT INTO tb_tareas (descripcion) values (?)");
$stm->bind_param('s',$_POST['tarea']);
$stm->execute();
if($stm->affected_rows>0)
{
    echo '
            <script type="text/javascript"> 
            alert("Exito");
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

