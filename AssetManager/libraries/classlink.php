<?php
    //$DBLink = 'class/dbconnect.php';
    $ProcessingLink = 'class/Processing.php';
    $UserLoginLink = 'class/UserLogin.php';
    $DepartmentLink = 'class/DepartmentClass.php';

    /*if(file_exists($DBLink)){
    include $DBLink;
    }else{
    include '../'.$DBLink;
    }*/

    if(file_exists($ProcessingLink)){
        include $ProcessingLink;
    }else{
        include '../'.$ProcessingLink;
    }

    if(file_exists($UserLoginLink)){
        include $UserLoginLink;
    }else{
        include '../'.$UserLoginLink;
    }

    if(file_exists($DepartmentLink)){
        include $DepartmentLink;
    }else{
        include '../'.$DepartmentLink;
    }

?>                                       
