<?php
session_start();
include('Conexao.php');

if(empty($_POST['user']) || empty($_POST['senha'])){
    header('Location: ../index.html');
    exit();
}
$user = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select user from adm where user = '{$user}' and pass = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1 ){
    $_SESSION['user'] = $user;
    header('Location: paineladm.php');
    exit();
}
else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../paineladm/entrar.php');
}


?>