<?php
include('verifica_login.php');

$email = $_SESSION['email'];

$query = "SELECT * FROM `usuario` WHERE `email` LIKE '{$email}'";

$resultid = mysqli_query($conexao,$query);
$row = mysqli_fetch_assoc($resultid);

$id = $row['Cpf'];
?>