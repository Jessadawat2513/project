<?php
    $dbclass = 'class/dbconnect.php';

    if(file_exists($dbclass)){
        include $dbclass;
    }else{
        include '../'.$dbclass;
    }
    class Processing{
        function ConnectDatabase(){
            $db = new DBconn();
            $conn = $db->ConnectDatabase();
            return $conn;
        }

        function FetchData($sql){
            $conn = $this->ConnectDatabase(); 
            $query = sqlsrv_query($conn,$sql);
            while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
                $array_out[] = $row;
            }
            sqlsrv_free_stmt($query);
            return $array_out;
        }

        function FetchDataByArray($sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            $query = sqlsrv_query($conn,$sql,$params);
            while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
                $array_out[] = $row;
            }
            sqlsrv_free_stmt($query);
            return $array_out;  
        }

        function FetchDataByParameter($sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num]["Data"],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            return json_encode($params);
            $query = sqlsrv_query($conn,$sql,$params);
            while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
                $array_out[] = $row;
            }
            sqlsrv_free_stmt($query);
            return $array_out;                                          
        }

        function FetchNextSequence($sequence){
            $conn = $this->ConnectDatabase();
            $sql = "SELECT NEXT VALUE FOR ".$sequence." AS NextSequence";
            $query = sqlsrv_query($conn,$sql);
            while($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
                $NextSequence = $result["NextSequence"];
            }            
            return $NextSequence;
        }

        function InsertBySequence($sequence,$sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            $NextSequence = $this->FetchNextSequence($sequence);
            array_push($params,array($NextSequence,SQLSRV_PARAM_IN));
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num]["Data"],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            $result = sqlsrv_query($conn,$sql,$params);
            if($result === false ) {
                die( print_r( sqlsrv_errors(), true));
                return false;
            }
            else{
                return true;
            }
        }

        function InsertByParameter($sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num]["Data"],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            $result = sqlsrv_query($conn,$sql,$params);
            if($result === false ) {
                die( print_r( sqlsrv_errors(), true));
                return false;
            }
            else{
                return true;
            }
        }

        function UpdateByParameter($sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num]["Data"],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            $result = sqlsrv_query($conn,$sql,$params);
            if($result === false ) {
                die( print_r( sqlsrv_errors(), true));
                return false;
            }
            else{
                return true;
            }
        }

        function CheckExitsQuery($sql,$array){
            $conn = $this->ConnectDatabase();
            $params = array();
            $status = false;
            for($num = 0 ; $num < count($array) ; $num++){
                $data_push = array($array[$num],SQLSRV_PARAM_IN);
                array_push($params,$data_push);
            }
            $query = sqlsrv_query($conn,$sql,$params);
            while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
                $status = true;
            }  
            return $status;
        }  
    }
?>
