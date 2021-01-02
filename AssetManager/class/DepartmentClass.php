<?php
    class DepartmentClass{
        private $DepartmentID = null;
        private $DepartmentName = null;
        private $Data = array();
        
        function setDepartmentID($DepartmentID){ $this->DepartmantID = $DepartmentID; }
        function setDepartmentName($DepartmentName){ $this->DepartmentName = $DepartmentName; }
        
        function getDepartmentID(){ return $this->DepartmentID; }
        function getDepartmentname(){ return $this->DepartmentName; }
        
        function FetchData(){
            array_push($this->Data,array("Title"=>"DepartmentID","Data"=>$this->DepartmentID));
            array_push($this->Data,array("Title"=>"DepartmentName","Data"=>$this->DepartmentName));
            return $this->Data;
        }
        
        function EncodeData($array){
            foreach($array as $row){
                switch($row["Title"]){
                    case "DepartmentID" :
                        $this->setUserID($row["Data"]);
                        break;
                    case "DepartmentName" :
                        $this->setUserName($row["Data"]);
                        break;
                }
            }
        }
    }
?>
