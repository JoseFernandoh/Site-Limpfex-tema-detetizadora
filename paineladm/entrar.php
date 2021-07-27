<?php
session_start();
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
               <a href="entrar.php" id="text-menu">Entrar</a>
           </div>    
</div>

    <div class="geral">
        <h1>Login</h1>

        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
            <p>ERRO: Usuario ou senha invalido</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>

     <form action="../bancodedados/loginAdm.php" method="POST">
        <legend>Acessar Painel do Adm</legend>
            <label for="email">User</label>
            <input type="Text" name="user" autocapitalize="off"></input>
            <label for="senha">Senha</label>
            <input type="password" name="senha"></input>
            <input type="submit" value="LOGIN" class="btn" ></input>
        </form>
    </div>
    
</body>
</html>