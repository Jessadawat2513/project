function EquipmentViewLoad(){
    var jsonData;
    $.post("../controller/equipmentviewload.php")
    .done(function(jsonObj){
        jsonData = JSON.parse(jsonObj);
        //alert(jsonData);
        $.each(jsonData,function(key,value){
            //$("<option>").val(value.DepID).text(value.DepName).appendTo("#departmentselect");
        });
    });
}

function SearchData(){
    alert("SearchData");
}