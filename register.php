<?php
require_once('sql_connect.php');
//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$username = "";
$email = "";
$password = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"])) {
        $username = $_POST['username'];
    }
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
    }
    if (isset($_POST["password"])) {
        $password = $_POST['password'];
    }
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO user_info (username, email, password)
    VALUES ('$username', '$email', '$password')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
require_once('sql_disconnect.php');

header("location: index.php")
?>