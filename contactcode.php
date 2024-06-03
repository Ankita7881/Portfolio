<?php

if (isset($_POST['btn'])) {

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['phone'];
    $d = $_POST['msg'];

    $con = mysqli_connect("localhost", "root", "", "portfolio");

    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");

    $datetime = $date . "  " . $time;

    $ins = "INSERT INTO `contact`(`name`, `email`, `phone`, `msg`, `datetime`)
     VALUES ('$a','$b','$c','$d','$datetime')";

    if (mysqli_query($con, $ins)) {
        // echo "Success";
        echo "<script>window.location.href='index.php';alert('data store')</script>";
    } else {
        echo "<script>window.location.href='index.php';alert('data not store')</script>";
    }

}
?>