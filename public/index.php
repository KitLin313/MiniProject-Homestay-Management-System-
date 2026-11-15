<?php
    include("../config/db/database.php");

    require_once "../views/layouts/footer.php";

    $sql = "SELECT * FROM ROOMS";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    echo $row["room_id"] . "<br>";
    echo $row["room_name"] . "<br>";

    mysqli_close($conn);
?>