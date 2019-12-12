<?php
require_once('sql_connect.php');
//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$email = "";
$password = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
    }
    if (isset($_POST["password"])) {
        $password = $_POST['password'];
    }
     $sql = "SELECT * FROM user_info WHERE email ='$email' And password = '$password'";
     $result = $connect->query($sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["username"]. "- Email: " . $row["email"]. "<br>";
        header('location: welcome.php');
    }
} else {
    echo "nhập sai email or password";
}
}
require_once('sql_disconnect.php');
// header("location: index.php")
?>

<!-- function login()
{
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        var_dump($_POST[$email]);
        var_dump($_POST[$password]);
        // include('ketnoidb.php');
        // $sql = "SELECT * FROM user_info WHERE email ='$email' And password = '$password'";
        // $result = $connect->query($sql);
      
    }
}
login(); -->
