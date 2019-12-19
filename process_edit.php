<?php

// Create connection
require_once('sql_connect.php');
$sql = "UPDATE user_info SET username='$_POST[username]' , email='$_POST[email]' WHERE id=$_POST[id]";
var_dump($sql);
if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('location: welcome.php');
} else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();
?>