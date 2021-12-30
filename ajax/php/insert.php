<?php
include "db.php";


$first_name = $_POST['fname'];
$dep = $_POST['dep_name'];
$uni = $_POST['uni_name'];



$sql = "INSERT INTO users (StudentName, Dep, Uni)
VALUES ('$first_name','$dep','$uni')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}
