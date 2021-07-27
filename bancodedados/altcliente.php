<?php

session_start();
include('Conexao.php');

$id_usuario = mysqli_real_escape_string($conexao, $_POST['id_usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['Sobrenome']);
$Data = mysqli_real_escape_string($conexao, $_POST['Data']);
$Telefone = mysqli_real_escape_string($conexao, $_POST['Telefone']);
    

    $query = "UPDATE `usuario` SET `Nome` = '{$nome}', `Sobrenome` = '{$sobrenome}', `Data` = '{$Data}', `Telefone` = '{$Telefone}', `Email` = '{$email}' WHERE `usuario`.`Id_Usuario` = '{$id_usuario}'";
    
    $result = mysqli_query($conexao,$query);

    if($_SESSION['email']!=$email){
        header('Location: logout.php');

    }else{
        header('Location: ../painelcliente/painelcliente.php');
    }
    
?>