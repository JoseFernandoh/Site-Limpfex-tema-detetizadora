<?php
session_start();
    echo $_SESSION['user'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <title>LimpFlex</title>
</head>
<body>
    <div class="banner">
        <h1><img height="70px" src="../img/LimpFleX-removebg-preview.png" alt=""></h1>
           <div class="menu"> 
               <a href="../index.php" id="text-menu">Home</a>
               <a href="orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href='../painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>
           </div>    
    </div>

    <div class="geral">
        <h2>Digite a Senha</h2>
        <?php
        if(isset($_SESSION['pass'])):
        ?>
        <div class="notification is-danger">
            <p>ERRO: Senha Atual Incorreta</p>
        </div>
        <?php
        endif;
        unset($_SESSION['pass']);
        ?>

        <form action="../bancodedados/recoverypassadm.php" method="POST">
            <label for="senha atual">Senha Atual</label>
            <input type="password" name="senhaatual">
            <label for="nova senha">Nova Senha</label>
            <input type="password" name="novasenha" placeholder="Digite a Senha">
            <input type="submit" value="Confirmar" class="btn">
        </form>
        <a href="../paineladm/paineladm.php">Voltar</a>
    </div>
</body>
</html>