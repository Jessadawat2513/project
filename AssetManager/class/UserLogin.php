<?php
    Class UserLogin{
        private $UserID = null;
        private $UserName = null;
        private $Data = array();
        function setUserID($UserID){ $this->UserID = $UserID; }
        function setUserName($UserName){ $this->UserName = $UserName; }

        function getUserID(){ return $this->UserID; }
        function getUserName(){ return $this->UserName; }

        function FetchData(){
            array_push($this->Data,array("Title"=>"UserID","Data"=>$this->UserID));
            array_push($this->Data,array("Title"=>"UserName","Data"=>$this->UserName));
            return $this->Data;
        }

        function EncodeData($array){
            foreach($array as $row){
                switch($row["Title"]){
                    case "UserID" :
                        $this->setUserID($row["Data"]);
                        break;
                    case "UserName" :
                        $this->setUserName($row["Data"]);
                        break;
                }
            }
        }

    }
?>
