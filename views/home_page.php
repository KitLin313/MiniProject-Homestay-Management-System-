<?php
    include("../views/layouts/head.php");
    include("../views/layouts/header.php");
    
    /* Testing */
    $sql = "SELECT * FROM ROOMS";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    echo $row["room_id"] . "<br>";
    echo $row["room_name"] . "<br>";

    mysqli_close($conn);

    include ("../views/layouts/footer.php");
?>