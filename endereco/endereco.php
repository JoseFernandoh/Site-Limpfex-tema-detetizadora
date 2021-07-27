<?php
include("../bancodedados/Conexao.php");
include("../bancodedados/pegarcpf.php");


$query = "SELECT * FROM `endereço` WHERE `Cpf` = '{$id}'";
$result = mysqli_query($conexao,$query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/banner.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/endereco.css">
    <link rel="stylesheet" href="../style/enderecobutton.css">
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
    <div class="endereco">
        <h2>Meus Endereço</h2>
        <br>
            <table>
            <thead>
            <tr>
            <td>CEP</td>
            <td>Estado</td>
            <td>Cidade</td>
            <td>Logradouro</td
            ><td>Numero</td>
            <td>Complemento</td>
            <td>Ponto De Referençia</td>
            </tr>
            </thead>
                <?php
                    while ($row=mysqli_fetch_assoc($result)){
                        echo"<tbody>
                        <tr>
                        <td>" .$row['Cep']. "</td>
                        <td>" .$row['Estado']. "</td>
                        <td>" .$row['Cidade']. "</td>
                        <td>" .$row['Logradouro']. "</td>
                        <td>" .$row['Numero']. "</td>
                        <td>" .$row['Complemento']. "</td>
                        <td>" .$row['Ponto de Referencia']. "</td>
                        <td id='icontd'>
                        <form action='../bancodedados/enderecoediapg.php' method='post'>
                        <input type='hidden' name='endereco_id' value='".$row['Endereco_ID']."'>
                        <button class='btnicon' name='id' value='apagar' type='submit'>
                        <img class='imgicon' src='../img/excluir-bin.png' >
                        </button>
                        <button class='btnicon' name='id' value='editar' type='submit'>
                        <img class='imgicon' src='../img/marcador-de-lapis.png'>
                        </button>
                        </form>
                        </td>
                        </tr>
                        </tbody>
                        ";
                    }
                ?>
            </table>
        <br>
        <br>
        <div>
        <a class="btn" href="../painelcliente/painelcliente.php">Voltar</a>
        <a class="btn" href="adiendereco.php">Adicionar Endereço</a>
        </div>
        
    
    </div>
</body>
</html>