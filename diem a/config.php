<?php
    $conn = mysqli_connect("localhost", "root", "", "diema");

    if (!$conn) {
        die("ket noi that bai: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");
?>
