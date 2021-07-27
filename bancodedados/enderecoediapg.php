<?php
session_start();
include('Conexao.php');

$endereco_id = mysqli_real_escape_string($conexao, $_POST['endereco_id']);
$id = $_POST['id'];
$_SESSION['id']=$endereco_id;

if($id=='apagar'){
    $query = "DELETE FROM `endereço` WHERE `endereço`.`Endereco_ID` = '{$endereco_id}'";
    $result = mysqli_query($conexao, $query);
    unset($_SESSION['id']);
    header('Location: ../endereco/endereco.php');
}
elseif($id =='editar'){
    header('Location: ../endereco/editendereco.php');
}
else{
    echo 'comando não reconhecido';
}

?>