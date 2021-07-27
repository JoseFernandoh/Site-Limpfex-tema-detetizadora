
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
               <a href="orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="../saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <a href="../entrar/entrar.php" id="text-menu">Entrar</a>
            </div>    
</div>

    <div class="geral">
        <h2>Criar Conta</h2>
        <form action="../bancodedados/singupdb.php" method="post">
            <label for="text">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu Nome">
            <label for="text">Sobrenome</label>
            <input type="text" name="Sobrenome" placeholder="Digite seu Sobreome">
            <label for="text" name="CPF">CPF</label>
            <input type="text" name="CPF">
            <label for="data">Data de Nascimento</label>
            <input type="date" name="Data">
            <label for="text">Telefone</label>
            <input for="text" name="Telefone">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="seuemail@gmail.com">
            <label for="confirmeemail">Confirme Email</label>
            <input type="email" name="confirmeemail" placeholder=seuemail@gmail.com>
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua Senha">
        <input type="submit" value="Criar Conta" class="btn">
        </form>
        <a href="../entrar/entrar.php">Entrar</a>
    </div>
</body>
</html>