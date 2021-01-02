<?php
    class AssetClass{
        private $AssetID = null;
        private $AssetDeviceName = null;
        private $AssetType = null;
        private $AssetBrand = null;
        private $AssetModel = null;
        private $AssetCPU = null;
        private $AssetStorage = null;
        private $AssetMemory = null;
        private $AssetVender = null;
        private $AssetPreOrderNO = null;
        private $AssetStatus = null;
        private $AssetIPAddress = null;
        private $AssetAssetID = null;
        private $AssetBuyDate = null;
        private $AssetExpireDate = null;
        private $AssetLocation = null;
        private $AssetFloor = null;
        private $AssetAssetGroup = null;
        private $AssetWarrantyType = null;
        private $AssetSerialNo = null;
        private $AssetPrintType = null;
        private $AssetMonitorType = null;
        private $AssetMonitorSize = null;
        private $AssetPrice = null;
        private $AssetComment = null;
        private $AssetUserUpdate = null;
        private $AssetMaintanance = null;
        private $AssetMicrosoft = null;
        private $AssetPrintList = null;
        private $AssetSwitchPort = null;
        private $Data = array();

        function setAssetID($AssetID){ $this->AssetID = $AssetID; }
        function setAssetDeviceName($AssetDeviceName){ $this->AssetDeviceName = $AssetDeviceName; }
        function setAssetType($AssetType){ $this->AssetType = $AssetType; }
        function setAssetBrand($AssetBrand){ $this->AssetBrand = $AssetBrand; }
        function setAssetModel($AssetModel){ $this->AssetModel = $AssetModel; }
        function setAssetCPU($AssetCPU){ $this->AssetCPU = $AssetCPU; }
        function setAssetStorage($AssetStorage){ $this->AssetStorage = $AssetStorage; }
        function setAssetMemory($AssetMemory){ $this->AssetMemory = $AssetMemory; }
        function setAssetVender($AssetVender){ $this->AssetVender = $AssetVender; }
        function setAssetPreOrderNO($AssetPreOrderNO){ $this->AssetPreOrderNO = $AssetPreOrderNO; }
        function setAssetStatus($AssetStatus){ $this->AssetStatus = $AssetStatus; }
        function setAssetIPAddress($AssetIPAddress){ $this->AssetIPAddress = $AssetIPAddress; }
        function setAssetAssetID($AssetAssetID){ $this->AssetAssetID = $AssetAssetID; }
        function setAssetBuyDate($AssetBuyDate){ $this->AssetBuyDate = $AssetBuyDate; }
        function setAssetExpireDate($AssetExpireDate){ $this->AssetExpireDate = $AssetExpireDate; }
        function setAssetLocation($AssetLocation){ $this->AssetLocation = $AssetLocation; }
        function setAssetFloor($AssetFloor){ $this->AssetFloor = $AssetFloor; }
        function setAssetAssetGroup($AssetAssetGroup){ $this->AssetAssetGroup = $AssetAssetGroup; }
        function setAssetWarrantyType($AssetWarrantyType){ $this->AssetWarrantyType = $AssetWarrantyType; }
        function setAssetSerialNo($AssetSerialNo){ $this->AssetSerialNo = $AssetSerialNo; }
        function setAssetPrintType($AssetPrintType){ $this->AssetPrintType = $AssetPrintType; }
        function setAssetMonitorType($AssetMonitorType){ $this->AssetMonitorType = $AssetMonitorType; }
        function setAssetMonitorSize($AssetMonitorSize){ $this->AssetMonitorSize = $AssetMonitorSize; }
        function setAssetPrice($AssetPrice){ $this->AssetPrice = $AssetPrice; }
        function setAssetComment($AssetComment){ $this->AssetComment = $AssetComment; }
        function setAssetUserUpdate($AssetUserUpdate){ $this->AssetUserUpdate = $AssetUserUpdate; }
        function setAssetMaintanance($AssetMaintanance){ $this->AssetMaintanance = $AssetMaintanance; }
        function setAssetMicrosoft($AssetMicrosoft){ $this->AssetMicrosoft = $AssetMicrosoft; }
        function setAssetPrintList($AssetPrintList){ $this->AssetPrintList = $AssetPrintList; }
        function setAssetSwitchPort($AssetSwitchPort){ $this->AssetSwitchPort = $AssetSwitchPort; }

        function getAssetID(){ return $this->AssetID; }
        function getAssetDeviceName(){ return $this->AssetDeviceName; }
        function getAssetType(){ return $this->AssetType; }
        function getAssetBrand(){ return $this->AssetBrand; }
        function getAssetModel(){ return $this->AssetModel; }
        function getAssetCPU(){ return $this->AssetCPU; }
        function getAssetStorage(){ return $this->AssetStorage; }
        function getAssetMemory(){ return $this->AssetMemory; }
        function getAssetVender(){ return $this->AssetVender; }
        function getAssetPreOrderNO(){ return $this->AssetPreOrderNO; }
        function getAssetStatus(){ return $this->AssetStatus; }
        function getAssetIPAddress(){ return $this->AssetIPAddress; }
        function getAssetAssetID(){ return $this->AssetAssetID; }
        function getAssetBuyDate(){ return $this->AssetBuyDate; }
        function getAssetExpireDate(){ return $this->AssetExpireDate; }
        function getAssetLocation(){ return $this->AssetLocation; }
        function getAssetFloor(){ return $this->AssetFloor; }
        function getAssetAssetGroup(){ return $this->AssetAssetGroup; }
        function getAssetWarrantyType(){ return $this->AssetWarrantyType; }
        function getAssetSerialNo(){ return $this->AssetSerialNo; }
        function getAssetPrintType(){ return $this->AssetPrintType; }
        function getAssetMonitorType(){ return $this->AssetMonitorType; }
        function getAssetMonitorSize(){ return $this->AssetMonitorSize; }
        function getAssetPrice(){ return $this->AssetPrice; }
        function getAssetComment(){ return $this->AssetComment; }
        function getAssetUserUpdate(){ return $this->AssetUserUpdate; }
        function getAssetMaintanance(){ return $this->AssetMaintanance; }
        function getAssetMicrosoft(){ return $this->AssetMicrosoft; }
        function getAssetPrintList(){ return $this->AssetPrintList; }
        function getAssetSwitchPort(){ return $this->AssetSwitchPort; }
        
        function FetchData(){
            array_push($this->Data,array("Title"=>"AssetID","Data"=>$this->AssetID));
            array_push($this->Data,array("Title"=>"AssetDeviceName","Data"=>$this->AssetDeviceName));
            array_push($this->Data,array("Title"=>"AssetType","Data"=>$this->AssetType));
            array_push($this->Data,array("Title"=>"AssetBrand","Data"=>$this->AssetBrand));
            array_push($this->Data,array("Title"=>"AssetModel","Data"=>$this->AssetModel));
            array_push($this->Data,array("Title"=>"AssetCPU","Data"=>$this->AssetCPU));
            array_push($this->Data,array("Title"=>"AssetStorage","Data"=>$this->AssetStorage));
            array_push($this->Data,array("Title"=>"AssetMemory","Data"=>$this->AssetMemory));
            array_push($this->Data,array("Title"=>"AssetVender","Data"=>$this->AssetVender));
            array_push($this->Data,array("Title"=>"AssetPreOrderNO","Data"=>$this->AssetPreOrderNO));
            array_push($this->Data,array("Title"=>"AssetStatus","Data"=>$this->AssetStatus));
            array_push($this->Data,array("Title"=>"AssetIPAddress","Data"=>$this->AssetIPAddress));
            array_push($this->Data,array("Title"=>"AssetAssetID","Data"=>$this->AssetAssetID));
            array_push($this->Data,array("Title"=>"AssetBuyDate","Data"=>$this->AssetBuyDate));
            array_push($this->Data,array("Title"=>"AssetExpireDate","Data"=>$this->AssetExpireDate));
            array_push($this->Data,array("Title"=>"AssetLocation","Data"=>$this->AssetLocation));
            array_push($this->Data,array("Title"=>"AssetFloor","Data"=>$this->AssetFloor));
            array_push($this->Data,array("Title"=>"AssetAssetGroup","Data"=>$this->AssetAssetGroup));
            array_push($this->Data,array("Title"=>"AssetWarrantyType","Data"=>$this->AssetWarrantyType));
            array_push($this->Data,array("Title"=>"AssetSerialNo","Data"=>$this->AssetSerialNo));
            array_push($this->Data,array("Title"=>"AssetPrintType","Data"=>$this->AssetPrintType));
            array_push($this->Data,array("Title"=>"AssetMonitorType","Data"=>$this->AssetMonitorType));
            array_push($this->Data,array("Title"=>"AssetMonitorSize","Data"=>$this->AssetMonitorSize));
            array_push($this->Data,array("Title"=>"AssetPrice","Data"=>$this->AssetPrice));
            array_push($this->Data,array("Title"=>"AssetComment","Data"=>$this->AssetComment));
            array_push($this->Data,array("Title"=>"AssetUserUpdate","Data"=>$this->AssetUserUpdate));
            array_push($this->Data,array("Title"=>"AssetMaintanance","Data"=>$this->AssetMaintanance));
            array_push($this->Data,array("Title"=>"AssetMicrosoft","Data"=>$this->AssetMicrosoft));
            array_push($this->Data,array("Title"=>"AssetPrintList","Data"=>$this->AssetPrintList));
            array_push($this->Data,array("Title"=>"AssetSwitchPort","Data"=>$this->AssetSwitchPort));
            return $this->Data;
        }

    }
?>