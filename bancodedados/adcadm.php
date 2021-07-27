<?php
    include("vereficarloginadm.php");
    include("Conexao.php");

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $user = mysqli_real_escape_string($conexao, $_POST['user']);
    $pass = mysqli_real_escape_string($conexao, $_POST['pass']);

    $query = "INSERT INTO `adm` (`ID_ADM`, `Nome`, `User`, `Pass`) VALUES (NULL, '{$nome}', '{$user}', '{$pass}')";

    $result = mysqli_query($conexao, $query);

    $_SESSION['adcadm']=TRUE;

    header('Location: ../paineladm/adcadm.php');

?>