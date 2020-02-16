<?php
session_start();

require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');
require_once ('Componentes'.DIRECTORY_SEPARATOR.'Redirect.php');
require_once ('Componentes'.DIRECTORY_SEPARATOR.'ConversorMoeda.php');

$conversor = new ConversorMoeda();
$redirecionar = new Redirecionar();
//POST VARIABLES 
$valorEmprestimo = mysqli_real_escape_string($mysqli_connection, $_POST['valor']);
$valorEmprestimo <= 0 ? $valorEmprestimo = 0 : 
$valorEmprestimo = $conversor->converterMoedaToFloat($valorEmprestimo);

$anos = mysqli_real_escape_string($mysqli_connection, $_POST['anos']);

$garantia = mysqli_real_escape_string($mysqli_connection, $_POST['garantia']);

$motivoEmprestimo = mysqli_real_escape_string($mysqli_connection, $_POST['motivo']);

$habito = mysqli_real_escape_string($mysqli_connection, $_POST['habito']);

$empregado = mysqli_real_escape_string($mysqli_connection, $_POST['empregado']);

$profissao = mysqli_real_escape_string($mysqli_connection, $_POST['profissao']);

$tempoEmpresa = mysqli_real_escape_string($mysqli_connection, $_POST['exp']);

$rendaMensal = mysqli_real_escape_string($mysqli_connection, $_POST['rendamensal']);
$rendaMensal <= 0 ? $rendaMensal = 0 : 
$rendaMensal = $conversor->converterMoedaToFloat($rendaMensal);

#region calculo pctg
$sum = 20;
if ($rendaMensal >= 1500) {
    $sum += 10;
}

if ($habito == 3) {
    $sum += 10;
}

if ($valorEmprestimo <= 15000) {
    $sum += 10;
}elseif ($valorEmprestimo <= 25000) {
    $sum += 5;
}elseif ($valorEmprestimo <= 45000) {
    $sum += 2;
}

if ($anos <= 5) {
    $sum += 10;
}elseif ($anos <= 10) {
    $sum += 3;
}

if ($garantia == 1) {
    $sum += 10;
}elseif ($garantia == 2) {
    $sum += 6;
}

if ($motivoEmprestimo != 0) {
    $sum += 10;
}

if ($empregado == 1) {
    $sum += 10;
}

if ($tempoEmpresa >= 1) {
    $sum += 10;
}
#endregion
//dados cliente

$nomeCompleto = mysqli_real_escape_string($mysqli_connection, $_POST['nome']);

$email = mysqli_real_escape_string($mysqli_connection, $_POST['email']);

$telefone = mysqli_real_escape_string($mysqli_connection, $_POST['telefone']);

$senha = mysqli_real_escape_string($mysqli_connection, $_POST['senha']);

$cpf = mysqli_real_escape_string($mysqli_connection, $_POST['cpf']);


$handler = new HandlerDataBase();

$searchCPF = $handler->selectCountWhere("cpf","login","cpf = '$cpf'");
if ($searchCPF <= 0) {
    $insereCliente = $handler->insertFields("login",
    "nome,email,telefone,cpf,senha","'$nomeCompleto','$email','$telefone','$cpf','$senha'");

    $lastId = $handler->selectLastLineOfTable("idlogin","login","idlogin");
    $lastId = json_encode($lastId);
    $lastId = json_decode($lastId);
    $lastId = $lastId[0]->idlogin;

}else {
    $lastId = $handler->selectWhere("idlogin","login","cpf = '$cpf'");
    $lastId = json_encode($lastId);
    $lastId = json_decode($lastId);
    $lastId = $lastId[0]->idlogin;
}

$resposta = $handler->insertFields("emprestimos","valor,garantia,anos,empregado,
anos_de_empresa,profissao,habito,motivo_emprestimo,pctg_receber,salario,cliente",
"'$valorEmprestimo','$garantia','$anos','$empregado','$tempoEmpresa',
'$profissao','$habito','$motivoEmprestimo','$sum','$rendaMensal','$lastId'");

if ($resposta == 1) {
    $_SESSION['sucess'] = true;
    $_SESSION['idcliente'] = $lastId;
    $redirecionar->redirect('ListaEmprestimos.php');
}else {
    echo $resposta;
}

?>