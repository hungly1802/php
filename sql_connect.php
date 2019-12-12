<?php
require_once('define.php');
// Kết nối database 
$connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $connect->connect_error);
    exit();
}
