<?php
    include("../bancodedados/Conexao.php");
    include("../bancodedados/pegarcpf.php");
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
               <a href="../orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href='../painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>
           </div>    
    </div>
    <div class="geral">
        <h2>Alterar dados</h2>
        <form action="../bancodedados/altcliente.php" method="POST">
        <?php
        echo "
            <input type='hidden' name='id_usuario' value='{$row['Id_Usuario']}'>
            <label for='text'>Nome</label>
            <input value='{$row['Nome']}' type='text' name='nome' placeholder='Digite seu Nome'>
            <label for='text'>Sobrenome</label>
            <input value='{$row['Sobrenome']}' type='text' name='Sobrenome' placeholder='Digite seu Sobreome'>
            <label for='data'>Data de Nascimento</label>
            <input value='{$row['Data']}' type='date' name='Data'>
            <label for='text'>Telefone</label>
            <input value='{$row['Telefone']}' for='text' name='Telefone'>
            <label for='email'>Email</label>
            <input value='{$row['Email']}' type='email' name='email' placeholder='seuemail@gmail.com'>"
        ?>
        <input type="submit" value="Alterar Dados" class="btn">
        </form>
</body>
</html>