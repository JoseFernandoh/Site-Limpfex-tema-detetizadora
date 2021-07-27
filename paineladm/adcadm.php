<?php
include('../bancodedados/vereficarloginadm.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/banner.css">
    <link rel="shortcut icon" href="../img/LimpFlex.ico" type="image/x-icon">
    <title>LimpFleX</title>
</head>
<body>

<div class="banner">
        <h1><img height="70px" src="../img/LimpFleX-removebg-preview.png" alt=""></h1>
           <div class="menu"> 
               <a href="../index.php" id="text-menu">Home</a>
               <a href="../orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href="../entrar/entrar.php" id="text-menu">Entrar</a>
            </div>    
</div>

    <div class="geral">
        <h2>Criar Adm</h2>
        <?php
        if(isset($_SESSION['adcadm'])):
        ?>
        <div class="notification is-danger">
            <p>Usuario Criado Com Sucesso</p>
        </div>
        <?php
        endif;
        unset($_SESSION['senha']);
        ?>

        <form action="../bancodedados/adcadm.php" method="POST">
            <label for="text">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu Nome">
            <label for="text">User</label>
            <input type="text" name="user" placeholder="Digite seu Sobreome">
            <label for="senha">Pass</label>
            <input type="password" name="pass" placeholder="Digite sua Senha">
        <input type="submit" value="Criar Conta" class="btn">
        </form>
        <a href="paineladm.php">Voltar</a>
    </div>
</body>
</html>