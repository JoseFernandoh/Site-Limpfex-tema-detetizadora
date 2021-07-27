<?php
session_start();
if(!$_SESSION['email']){
    header('Location: ../entrar/entrar.php');
    exit();
}