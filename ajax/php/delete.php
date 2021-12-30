<?php
include "db.php";

$id = $_POST['userId'];


$delete_sql = "DELETE FROM users WHERE id={$id}";
$result = mysqli_query($conn, $delete_sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}
