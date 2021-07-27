<?php
session_start();
include('Conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../createconta/singup.php');
    exit();
}
if(empty($_POST['nome']) || empty($_POST['Sobrenome'])){
    header('Location: ../createconta/singup.php');
    exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['Sobrenome']);
$Data = mysqli_real_escape_string($conexao, $_POST['Data']);
$CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
$Telefone = mysqli_real_escape_string($conexao, $_POST['Telefone']);


$query = " INSERT INTO `usuario` (`Id_Usuario`, `Nome`, `Sobrenome`, `Cpf`, `Data`, `Telefone`, `Email`, `Senha`) VALUES (NULL, '{$nome}', '{$sobrenome}', '{$CPF}' ,'{$Data}','{$Telefone}', '{$email}', '{$senha}');";

$result = mysqli_query($conexao, $query);


header('Location: ../index.php');
exit();




