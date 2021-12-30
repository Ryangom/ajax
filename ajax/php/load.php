<?php

include "db.php";

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = '
        <tr>
            <td>' . $row['StudentName'] . '</td>
            <td>' . $row['Dep'] . '</td>
            <td>' . $row['Uni'] . '</td>
            <td>             
                <button data-id="' . $row['id'] . '" class="update_btn">Update</button>
                <button data-id="' . $row['id'] . '" class="delete_btn">Delete</button>
            </td>
        </tr>
        ';
        echo $output;
    }
} else {
    echo "Data not found";
}
