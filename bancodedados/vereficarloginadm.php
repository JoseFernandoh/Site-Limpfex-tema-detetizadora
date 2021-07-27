<?php
session_start();
if(!$_SESSION['user']){
    header('Location: ../paineladm/entrar.php');
    exit();
}