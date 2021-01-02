<?php
    include "../libraries/classlink.php";
    
    $Data = array();
    
    array_push($Data,array("Title"=>"Test","Data"=>"Test"));
    
    $DataJSON = array();

    $Processing = new Processing();

    $sql = "{call GetDepartmentView}";

    $array = $Processing->FetchData($sql);

    //foreach($array as $row){
    //print "<option value='".$row["DepID"]."'>".$row["DepName"]."</option>";

    //print json_encode($array);

    $JsonData = array(
        "Department" => $array,
        "Test" => $Data
    );

    print json_encode($JsonData);
    
?>
