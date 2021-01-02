<?php
    Class DBconn{
        /*function ConnectDatabase(){
            try{
                $serverName = "Developer";
                $connectionInfo = array( "Database"=>"ASSETDB", "UID"=>"sa", "PWD"=>"admin-1","CharacterSet"=>"UTF-8");
                $connection = sqlsrv_connect($serverName, $connectionInfo);
                if($connection == false){
                    die(sqlsrv_errors());
                }else{
                    return $connection;
                }
            }catch(Exception $ex){
                echo($ex);
            }
        }*/
        
        function ConnectDatabase(){
            try{
                $serverName = "A01260";
                $connectionInfo = array( "Database"=>"ASSETDB", "UID"=>"sa", "PWD"=>"admin#1","CharacterSet"=>"UTF-8");
                $connection = sqlsrv_connect($serverName, $connectionInfo);
                if($connection == false){
                    die(sqlsrv_errors());
                }else{
                    return $connection;
                }
            }catch(Exception $ex){
                echo($ex);
            }
        }
        
        function CloseDatabase(){
            if(isset($this->connection)){
                sqlsrv_close($this->connection);
            }
        }
    }
?>