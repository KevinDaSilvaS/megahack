<?php

$mysqli_connection =new MySQLi('localhost', 'root', '', 'megahack') ;
if ($mysqli_connection->connect_error) {
    # code...
    echo "desconectado Erro:".$mysqli_connection->connect_error;
}else {
    //echo "conectado";
}
?>