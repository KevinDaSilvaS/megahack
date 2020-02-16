<?php
session_start();

require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');

$cpf = mysqli_real_escape_string($mysqli_connection, $_POST['CPF']);

$senha = mysqli_real_escape_string($mysqli_connection, $_POST['password']);

$handler = new HandlerDataBase();

$searchLogin = $handler->selectCountWhere("idlogin","login","cpf = '$cpf' AND senha = '$senha'");
if ($searchLogin == 1) {
    $idCliente = $handler->selectWhere("idlogin","login","cpf = '$cpf'");
    $idCliente = json_encode($idCliente);
    $idCliente = json_decode($idCliente);
    $idCliente = $idCliente[0]->idlogin;

    $_SESSION['idcliente'] = $idCliente;
    header('Location: ListaEmprestimos.php');
}
?>