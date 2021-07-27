<?php
session_start();
include('Conexao.php');

$Cep = mysqli_real_escape_string($conexao, $_POST['CEP']);
$Estado = mysqli_real_escape_string($conexao, $_POST['Estado']);
$Cidade = mysqli_real_escape_string($conexao, $_POST['Cidade']);
$Logradouro = mysqli_real_escape_string($conexao, $_POST['Logradouro']);
$Numero = mysqli_real_escape_string($conexao, $_POST['Numero']);
$Complemento = mysqli_real_escape_string($conexao, $_POST['Complemento']);
$PontoDeReferencia = mysqli_real_escape_string($conexao, $_POST['PontoDeReferencia']);


$query = "UPDATE `endereço` SET `Cep` = '{$Cep}', `Estado` = '{$Estado}', `Cidade` = '{$Cidade}', `Logradouro` = '{$Logradouro}', `Numero` = '{$Numero}', `Complemento` = '{$Complemento}', `Ponto de Referencia` = '{$PontoDeReferencia}' WHERE `endereço`.`Endereco_ID` = {$_SESSION['id']}";

$result = mysqli_query($conexao, $query);
unset($_SESSION['id']);

header('Location: ../endereco/endereco.php');

?>