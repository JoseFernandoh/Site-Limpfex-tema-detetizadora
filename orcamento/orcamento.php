<?php
include('../bancodedados/verifica_login.php');

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
        <form action="../bancodedados/bancoorcamento.php" method="POST">
            <label for="text">Data</label>
            <input type="date" name="data">
            <label for="text">Empresarial ou Industrial</label>
            <input type="text" name="opcao">
            <label for="text">Serviço</label>
            <br>
            <div class="checkbox">
                <label for="text">
                    <input type="checkbox" name="Afastamento">
                    Afastamento
                </label>
                <label for="text">
                    <input type="checkbox" name="Desinsetização">
                    Desinsetização
                </label>
                <label for="text">
                    <input type="checkbox" name="Descupinização">
                    Descupinização
                </label>
                <label for="text">
                    <input type="checkbox" name="Desratização">
                    Desratização
                </label>
                <label for="text">
                    <input type="checkbox" name="Higienização">
                    Higienização
                </label>
                <label for="text">
                    <input type="checkbox" name="Termonebulizador">
                    Termonebulizador
                </label>
                <label for="text">
                    <input type="checkbox" name="Sanitização">
                    Sanitização
                </label>
            </div>
            <br>
            <input class="btn" type="submit" value="Criar">
        </form>
    </div>
</body>
</html>