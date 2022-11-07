<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/fontawesome.min.css" rel="stylesheet"/>
    <link href="css/slick-theme.css" rel="stylesheet"/>
    <link href="css/slick.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/12d945dda3.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="container">
                    <div class="logo">
                        <a href="giaodien.php" class="brand"><img src="img/Logo.png"></a>
                    </div>
                    <div class="list">
                        <ul>
                            <li class="nav-item">
                                <a class="home" href="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="home" href="home.php">Pages</a>
                            </li>

                            <li class="nav-item">
                                <a class="home" href="#">Classes</a>
                                <ul class="submenu">
                                    <li><a href="#">Menu 2.1</a></li>
                                    <li><a href="#">Menu 2.2</a>
                                        <ul class="submenu">
                                            <li><a href="">Menu 2.1</a></li>
                                            <li><a href="">Menu 2.2</a></li>
                                            <li><a href="">Menu 2.3</a></li>
                                            <li><a href="">Menu 2.4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Menu 2.3</a></li>
                                    <li><a href="">Menu 2.4</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="home" href="home.php">Portfolio</a>
                            </li>

                            <li class="nav-item">
                                <a class="home" href="home.php">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="home" href="home.php">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="user">
                        <ul>
                            <li>
                                <a class="control-item search" href="home.php"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </li>

                            <li>
                                <a class="control-item user" href="login.php"><i class="fa-solid fa-user"></i></a>
                            </li>

                            <li>
                                <a class="control-item cart" href="home.php"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="wrapper-login">
            <div class="background">
                    <img src="img/Background.jpg" alt="">
            </div>
            <?php require("model/process-activation.php") ?>
            <form action="" id="tbform" method="post">
                <h2><?php echo $msg01 ?></h2>
                <p><?php echo $msg02 ?></p>
            </form>
        </div>
        <footer>
            <div class="test">
                Xin chao
            </div>
        </footer>
    </div>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/slick.min.js"></script>
</body>
</html>