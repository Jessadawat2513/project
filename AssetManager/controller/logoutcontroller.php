<?php
    session_destroy();
    /*if(!(isset($_SESSION["login_session"]))){
        header('Location:../index.php');       
    }*/
    $url = '../index.php';
    if (file_get_contents($url) !== false) {
        header("Location: ".$url);
        exit;
    }else{
        header("Location: ../".$url); 
        exit;
    }
?>
