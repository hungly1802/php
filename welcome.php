<!doctype html>
<html lang="en">

<head>
    <title>welcome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">

    <center>Đây là trang tổng hợp user</center>
    <?php
    //Kết nối databse
    require_once("sql_connect.php");
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "SELECT * FROM user_info";
    //Chạy câu SQL
    $result = $connect->query($sql);
    //Gắn dữ liệu lấy được vào mảng $data
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Đổ dữ liệu lấy được vào bảng     
    ?>
    <table class="table">
        <thead>
            <tr>              
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Chỉnh Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($data)) {
                foreach ($data as $value) { ?>
                   
                <tr id="<?=$value['id']?>" role="row">         
                   
                    <td><?=$value['id']?></td>
                    <td><?=$value['username'] ?></td>
                    <td><?=$value['email']?></td>
                    
                    <td><a class="edit btn btn-info" data="<?=$value['id']?>" href="edit.php?id=<?=$value['id']?>">Edit</a></td>
                    <td><a class="remove btn btn-info" data="<?=$value['id']?>"> Delete</a></td>
                    
                </tr>
                <?php 
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Thêm</button>
                    <!-- modal ẩn add_user -->
                    <div class="modal fade" id="myModal">
                        <form action="process_add.php" id="form_add" class="container bg-white mt-2 p-2" method="post">
                            <div class="form-group ">
                                <label for="">UserName</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Điền username" aria-describedby="helpId">
                                <p class="text-danger" id="username_error"></p>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Điền Email" aria-describedby="helpId">
                                <p class="text-danger" id="email_error"></p>

                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="Password" name="password" id="password" class="form-control" placeholder="Điền Password" aria-describedby="helpId">
                                <p class="text-danger" id="password_error"></p>

                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a name="" id="" class="btn btn-primary" href="welcome.php" role="button">Cancel</a>
                        </form>
                    </div>

                </td>
            </tr>
        </tfoot>
    </table>
    <!-- popop delete record confirm yes/no -->
    <div id="btn_del" class="modal fade bg-white m-auto modal-sm text-center p-3" role="dialog">                
        <p>Bạn có chắc chắn muốn xóa ?</p>
        <a id="del_kid" class="btn btn-info" data="<?=$value['id']?>"  href="process_del.php?id=<?=$value['id']?>"> Delete</a>
        <a class="btn btn-info" href="welcome.php"> Cancel</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="test.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(".remove").click(function(){
        
        if(confirm('Are you sure to remove this record ?'))
        {
        var id = $(this).attr("data"); 
        $(this).parent().parent().remove();
        $.ajax({
               url: 'process_del.php',
               type: 'POST',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {

                    // console.log($(this).html()) 
                //    $('tr #id').remove();
                    // $(this).parent('td').parent('tr').remove();
                    // console.log($(this).parent(tr))
                    // location.reload();

                    alert("Record removed successfully");  
               }
            });
 
        }
    });


</script>
</body>

</html>
<?php
