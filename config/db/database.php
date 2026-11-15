<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_passwd = "";
    $db_name = "hostel_management_db";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect! <br>";
    }
?>