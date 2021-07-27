<?php
session_start();
include('Conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../index.html');
    exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from usuario where email = '{$email}' and senha = '{$senha}'";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1 ){
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    exit();
}
else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../entrar/entrar.php');
}
