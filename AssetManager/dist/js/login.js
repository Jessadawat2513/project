function Login(){

    var username = $("#username").val();
    
    $.ajax({
        type : "POST",
        url : "controller/logincontroller.php",
        data : {
            username : username
        },
        success : function($result){
            window.location.href = $result;
        },
        error : function($result){
            alert($result);
        } 
    });
}