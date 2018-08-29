<?php
$conn=new mysqli('localhost','root','','tarea');
if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');//para agregar  el conjuto de caracteres