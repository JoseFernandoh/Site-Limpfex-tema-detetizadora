<?php
    session_start();
    
    $query = "SELECT * FROM `adm` WHERE `User` LIKE '{$_SESSION['user']}'";

    $resultid = mysqli_query($conexao,$query);
    $row = mysqli_fetch_assoc($resultid);
    

?>