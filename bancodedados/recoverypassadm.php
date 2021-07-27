<?php
session_start();
include("Conexao.php");

$email = $_SESSION['user'];

$query = "SELECT * FROM `adm` WHERE `User` LIKE '{$email}'";

$resultid = mysqli_query($conexao,$query);
$resulti = mysqli_fetch_assoc($resultid);

$_SESSION['pass'] = $resulti['Pass'];
$id = $resulti['ID_ADM'];

$SenhaAtual = mysqli_real_escape_string($conexao,$_POST['senhaatual']);
$NovaSenha = mysqli_real_escape_string($conexao,$_POST['novasenha']);

if($_SESSION['pass']==$SenhaAtual){
    $query = "UPDATE `adm` SET `pass` = '{$NovaSenha}' WHERE `adm`.`id_adm` = '{$id}'";
    $resultid = mysqli_query($conexao,$query);
    header('Location: logout.php');
}
else{
    $_SESSION['pass'] = true;
    header('Location: ../trocarsenha/recovery_passadm.php');
}


?>