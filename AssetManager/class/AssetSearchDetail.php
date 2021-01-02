<?php
    class AssetSearchDetail{
        private $AssetID = null;
        private $AssetDeviceName = null;
        private $AssetTypeName = null;
        private $DepartmentName = null;
        private $AssetFloor = null;
        private $Data = array();
        
        function setAssetID($AssetID){ $this->AssetID = $AssetID; }
        function setAssetDeviceName($AssetDeviceName){ $this->AssetDeviceName = $AssetDeviceName; }
        function setAssetTypeName($AssetTypeName){ $this->AssetTypeName = $AssetTypeName; }
        function setDepartmentName($DepartmentName){ $this->DepartmentName = $Department; }
        function setAssetFloor($AsserFloor){ $this->AssetFloor = $AssetFloor; }
        
        function getAssetID(){ return $this->AssetID; }
        function getAssetDeviceName(){ return $this->AssetDeviceName; }
        function getAssetTypeName(){ return $this->AssetTypeName; }
        function getDepartmentname(){ return $this->DepartmentName; }
        function getAssetFloor(){ return $this->AssetFloor; }
        
        function FetchData(){
            array_push($this->Data,array("Title"=>"AssetID","Data"=>$this->AssetID));
            array_push($this->Data,array("Title"=>"AssetDeviceName","Data"=>$this->AssetDeviceName));
            array_push($this->Data,array("Title"=>"AssetTypeName","Data"=>$this->AssetTypeName));
            array_push($this->Data,array("Title"=>"DepartmentName","Data"=>$this->DepartmentName));
            array_push($this->Data,array("Title"=>"AssetFloor","Data"=>$this->AssetFloor));
            return $this->Data;
        }
    }
?>
