<?php
    include("../bancodedados/Conexao.php");
    include("../bancodedados/pegarcpf.php");

    $query = "SELECT * FROM `orçamento` WHERE `Cpf` = '{$id}'";
    $result = mysqli_query($conexao,$query);
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bannercli.css">
    <link rel="shortcut icon" href="../img/LimpFlex.ico" type="image/x-icon">
    <title>Limpflex</title>
</head>
<body>
<div class="banner">
    <h1>Limpflex</h1>
</div>
<div class="layout-tela">
    <div class="menu">
        <div class="menu-button">
            <ul>
                <ol><a href="../index.php">Home</a></ol>
                <ol><a href="meusdados.php">Meus dados</a></ol>
                <ol><a href="../endereco/endereco.php">Meus endereços</a></ol>
                <ol><a href="../trocarsenha/recovery-pass.php">Trocar senha</a></ol>
                <ol><a href="../orcamento/orcamento.php">Orçamento</a></ol>
                <ol><a href="../bancodedados/logout.php">Sair</a></ol>
            </ul>
        </div>
    </div>

    <div class="tela-amostra">
        <div class="tela_amostra">
        <img id="fotoperfil" src="../img/Página do cliente.png" alt="">
        <a id="btnfoto" href="#"><img height="25px" src="../img/marcador-de-lapis.png" alt=""></a>
        <?php
        echo"<h3>{$row['Nome']}</h3>";
        echo"<h4>{$row['Email']}</h4>";
        ?>
        </div>
        <hr>
        <div class="orcamento">
        <h3 style="text-align: center;">Meus Orcamento</h3>
        <table>
            <tr>    
                <td>Data</td>
                <td>Empresa ou Industria</td>
                <td>Serviço</td>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo"
                <tr>
                <td> ".$row['data']." </td>
                <td> ".$row['Empresarial ou Industrial']." </td>
                <td id='servico'> ".$row['Serviço']." </td>
                </tr>
                ";
            }

            ?>
        </table>
        </div>
    </div>

</div>
    
</body>
</html>