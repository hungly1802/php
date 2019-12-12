<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/5dbad8e1be.js" crossorigin="anonymous"></script>
   
</head>

<body>
    <div class="top-bar">

        <div class="form">
            <ul>
                <li><a href="" data-toggle="modal" data-target="#myModal">Sign Up</a> </li>
                <li><a href="" data-toggle="modal" data-target="#myModal2">Login</a></li>
                <li>RSS Feeds</li>
                <li>Archived News</li>
            </ul>
        </div>
        <div class="icon">
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-product-hunt"></i>
            <i class="fab fa-google-plus-g"></i>
            <i class="fas fa-wifi"></i>
        </div>
    </div>
    <!-- The Modal Sign Up -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="register.php" method="post" id="form_register">
                        <label for="">Nhập vào tên</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                        <p class="text-warning" id="username_error"></p>

                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                        <p class="text-warning" id="email_error"></p>

                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                        <p class="text-warning" id="password_error"></p>

                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>



                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal Login -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>

                    </form>



                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <header>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">HOMEPAGE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STYLE DEMO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FULL WIDTH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DROPDOWN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LINK TEXT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LONG LINK TEXT</a>
                </li>
            </ul>
        </nav>
        <div class="header">
            <div class="header-left float-left">
                <h2>NobodyFool</h2>
                <p>Free PSD Website Template</p>
            </div>
            <div class="header-right float-right">
                <div class="form-group">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search Our Website...">
                        <input name="" id="" class="btn btn-primary" type="button" value="Button">
                    </div>

                </div>
            </div>
        </div>



    </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>