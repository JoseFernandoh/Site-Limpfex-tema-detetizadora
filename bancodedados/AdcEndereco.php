<?php
session_start();
include('Conexao.php');
include('pegarcpf.php');

$Cep = mysqli_real_escape_string($conexao, $_POST['CEP']);
$Estado = mysqli_real_escape_string($conexao, $_POST['Estado']);
$Cidade = mysqli_real_escape_string($conexao, $_POST['Cidade']);
$Logradouro = mysqli_real_escape_string($conexao, $_POST['Logradouro']);
$Numero = mysqli_real_escape_string($conexao, $_POST['Numero']);
$Complemento = mysqli_real_escape_string($conexao, $_POST['Complemento']);
$PontoDeReferencia = mysqli_real_escape_string($conexao, $_POST['PontoDeReferencia']);




$query = " INSERT INTO `endereço` (`Endereco_ID`, `Cpf`, `Cep`, `Estado`, `Cidade`, `Logradouro`, `Numero`, `Complemento`, `Ponto de Referencia`) VALUES (NULL, '{$id}', '{$Cep}', '{$Estado}', '{$Cidade}', '{$Logradouro}', '{$Numero}', '{$Complemento}', '{$PontoDeReferencia}');";

$result = mysqli_query($conexao,$query);

header('Location: ../endereco/endereco.php');
exit();


?>