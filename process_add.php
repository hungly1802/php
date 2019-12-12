<?php
//Kết nối databse
require_once("sql_connect.php");
//Viết câu SQL lấy tất cả dữ liệu trong bảng players
$sql = "INSERT INTO user_info (username, email, password)
VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";
//Chạy câu SQL
if ($connect->query($sql) === TRUE) {
    header("location: welcome.php");
} 

// if ($connect->query($sql) === TRUE) {
//     echo "<h1>Thêm mới cầu thủ thành công Click vào 
//     <a href='welcome.php'>đây</a> để về trang danh sách</h1>";
// }else{
//     echo "<h1>Có lỗi xảy ra Click vào 
//     <a href='welcome.php'>đây</a> để về trang danh sách</h1>";
// }
require_once("sql_disconnect.php")
?>