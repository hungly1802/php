<?php
require_once("sql_connect.php");
var_dump($_POST['id']);
// sql to delete a record
$sql = "DELETE FROM user_info WHERE id='".$_POST['id']."' ";
if ($connect->query($sql) === TRUE){

   echo "finish del";
}

require_once("sql_disconnect.php");
?>