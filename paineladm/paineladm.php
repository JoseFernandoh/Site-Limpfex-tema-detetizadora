<?php
    include("../bancodedados/Conexao.php");
    include("../bancodedados/pegaradm.php");

    $query ="SELECT * FROM `orçamento`";
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
                <ol><a href="../trocarsenha/recovery_passadm.php">Trocar senha</a></ol>
                <ol><a href="adcadm.php">Adicionar Adm</a></ol>
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
        echo"<h4>{$row['User']}</h4>";
        ?>
        </div>
        <hr>
        <div style="margin-left: 10px;" class="orcamento">
        <h3 style="text-align: center;">Orcamento</h3>
        <table>
            <tr>
                <td>CPF</td>    
                <td>Data</td>
                <td>Impresa ou Industria</td>
                <td>Serviço</td>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo"
                <tr>
                <td> ".$row['Cpf']."</td>
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