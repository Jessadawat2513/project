<?php
    session_start();

    $classlink = 'libraries/classlink.php';

    if(file_exists($classlink)){
        include $classlink;
    }else{
        include '../'.$classlink; 
    }

    $Processing = new Processing();
    $UserLogin = new UserLogin();

    $username = $_POST["username"];

    $sql = "{call GetUsers(?)}";

    $Data = array();
    array_push($Data,$_POST["username"]);
    
    if($Processing->CheckExitsQuery($sql,$Data)){    
        $array = $Processing->FetchDataByArray($sql,$Data); 

        foreach($array as $row){          
            $UserLogin->setUserID($row["UserID"]);
            $UserLogin->setUserName($row["UserName"]);
        }

        $_SESSION["login_session"] = $UserLogin->FetchData();
        
        print "views/home.php";
    }else{
        print "Cannot Connect Database !!!";
    }

?>
