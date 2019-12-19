<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
  $id = $_GET['id'];
  //Kết nối databse
  $con = mysqli_connect('localhost', 'root', '', 'user_data');
  //Viết câu SQL lấy tất cả dữ liệu trong bảng players
  $sql = "SELECT * FROM `user_info` WHERE `id`= " . $id;
  //Chạy câu SQL
  $result = mysqli_query($con, $sql);
  //Gắn dữ liệu lấy được vào mảng $data
  while ($row = mysqli_fetch_assoc($result)) {
    $info = $row;
  }
  ?>
  <form action="process_edit.php" method="POST">
    <h1>Chỉnh sửa thông tin user</h1>
    <div class="form-group">
      <span>id: </span><input type="text" name="id" value="<?php echo $info['id'] ?>">
    </div>
    <div class="form-group">
      <span>username: </span><input type="text" name="username" value="<?php echo $info['username'] ?>">
    </div>
    <div class="form-group">
      <span>email: </span> <input type="text" name="email" value="<?php echo $info['email'] ?>">
      <button type="submit" class="btn btn-primary">edit</button>
    </div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>