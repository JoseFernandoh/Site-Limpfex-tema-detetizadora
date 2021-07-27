<?php
session_start();
include("Conexao.php");

$email = $_SESSION['email'];

$query = "SELECT * FROM `usuario` WHERE `email` LIKE '{$email}'";

$resultid = mysqli_query($conexao,$query);
$resulti = mysqli_fetch_assoc($resultid);

$_SESSION['senha'] = $resulti['Senha'];


$SenhaAtual = mysqli_real_escape_string($conexao,$_POST['senhaatual']);
$NovaSenha = mysqli_real_escape_string($conexao,$_POST['novasenha']);

if($_SESSION['senha']==$SenhaAtual){
    $query = "UPDATE `usuario` SET `Senha` = '{$NovaSenha}' WHERE `usuario`.`email` = '{$email}'";
    $resultid = mysqli_query($conexao,$query);
    header('Location: logout.php');
}
else{
    $_SESSION['senha'] = true;
    header('Location: ../trocarsenha/recovery-pass.php');
}





?>