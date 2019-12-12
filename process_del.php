<?php
require_once("sql_connect.php");
var_dump($_GET);
// sql to delete a record
$sql = "DELETE FROM user_info WHERE id='".$_GET['id']."' ";
if ($connect->query($sql) === TRUE){

    header("location: welcome.php");
}
require_once("sql_disconnect.php");
?>