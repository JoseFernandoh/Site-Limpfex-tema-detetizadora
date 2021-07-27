<?php
session_start();
include('../bancodedados/Conexao.php');


$query = "SELECT * FROM `endereço` WHERE `Endereco_ID` = '{$_SESSION['id']}'";
$result = mysqli_query($conexao, $query);
$row=mysqli_fetch_assoc($result);

echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/banner.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/LimpFlex.ico" type="image/x-icon">
    <title>LimpFlex</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="banner">
        <h1><img height="70px" src="../img/LimpFleX-removebg-preview.png" alt=""></h1>
           <div class="menu"> 
               <a href="../index.php" id="text-menu">Home</a>
               <a href="../orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href='../painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>
           </div>    
    </div>
    <div class="geral">
        <h2>Editar Endereço</h2>
        <form action="../bancodedados/ediendereco.php" method="POST">
        <div class="endereco">
            <?php
            echo "
            <label for='text'>Cep</label>
            <input value='{$row['Cep']}' type='text' name='CEP'>
            <label for='text'>Estado</label>
            <input value='{$row['Estado']}' type='text' name='Estado'>
            <label for='text'>Cidade</label>
            <input value='{$row['Cidade']}' type='text' name='Cidade'>
            <label for='text'>Logradouro</label>
            <input value='{$row['Logradouro']}' type='text' name='Logradouro'>
            <label for='text'>Numero</label>
            <input value='{$row['Numero']}' type='text'name='Numero'>
            <label for='text'>Complemento</label>
            <input value='{$row['Complemento']}' type='text' name='Complemento'>
            <label for='text'>Ponto De Referencia</label>
            <input value='{$row['Ponto de Referencia']}' type='text' name='PontoDeReferencia'>"
            ?>
        </div>
        <input type="submit" value="Adicionar Endereço" class="btn">
        </form>
        <a href="endereco.php">Voltar</a>
    </div>