<?php
include("../bancodedados/Conexao.php");
include("../bancodedados/pegarcpf.php")

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
               <a href="orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href='../painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>
           </div>    
    </div>
    <div class="geral">
        <div class="telauser">
        <?php
            echo"
            <h4>Nome: {$row['Nome']} {$row['Sobrenome']}</h4>
            <h4>Email: {$row['Email']}</h4>
            <h4>CPF: {$row['Cpf']}</h4>
            <h4>Data: {$row['Data']}</h4>
            <h4>Telefone: {$row['Telefone']}</h4>  
            "
        ?>
        </div>
        <div class="btn_a">
            <a class="btn" href="../painelcliente/painelcliente.php">Voltar</a>
            <a class="btn" href="../painelcliente/altcliente.php">Alterar Dados</a>
        </div>
    </div>
</body>
</html>