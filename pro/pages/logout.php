<?php session_start();
    if(empty($_SESSION['UserMail'])):
        header('Location:index.php');
    endif;
?>
<!DOCTYPE html>
<html>
    <body>
        <div style="width:150px; margin:auto; height:500px; margin-top: 300px"></div>
            <?php
                include "conn.php";
                session_destroy();

                echo '<meta http-equiv="refresh" content="1;url=index.php">';
            ?>

    </body>
</html>