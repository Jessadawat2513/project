<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AssetManager | Home</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            session_start();
            include '..\libraries\library.php';
            include '..\libraries\classlink.php';
            
            $UserLogin = new UserLogin();
            $UserLogin->EncodeData($_SESSION["login_session"]);
        ?>
    </head>
    <body>
          
    </body>
</html>
