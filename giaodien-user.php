<?php
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginok'])){
        header("location:login.php");
    }

?>

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
                                <a class="control-item cart" href="home.php"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                            <li class="nav-item">
                                <?php
                                if(isset($_SESSION['isLoginok']))
                                {
                                    echo "<a class='user'>Xin chào: {$_SESSION['isLoginok']}</a>";
                                ?>
                                <ul class="submenu">
                                    <li><a href="#">Đơn hàng</a></li>
                                    <li><a href="logout.php">Logout</a></li> 
                                <?php
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>               
        <div class="background">
            <img src="img/Background.jpg" alt="">
        </div>
        <section>
            <div class="slider">
                <div class="slide-text">
                    <h3>Dumbbells Shop</h3>
                    <h4>Best body fitness</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                    <button>SHOP NOW</button>
                </div>
                <div class="slide-img">
                    <img src="img/Layer 3.png" alt="">
                </div>
            </div>
            <div class="slider-bottom">
                <div class="sub-slider">
                    <img src="img/5cb04e457e213.jpg" alt="" class="img">
                </div>
                <div class="sub-slider">
                    <div class="sub-slider2">
                        <img src="img/icon-_1_.jpg" alt=""class="icon">
                        <h5>STRENGTH</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="sub-slider">
                    <img src="img/5cee3d334ad30_1.jpg" alt=""class="img">
                </div>
                <div class="sub-slider">
                    <div class="sub-slider2">
                        <img src="img/icon.jpg" alt=""class="icon">
                        <h5>DUMBELLS</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="sub-slider">
                    <img src="img/5cff1632c51da_1.jpg" alt=""class="img">
                </div>
                <div class="sub-slider">
                    <div class="sub-slider2">
                        <img src="img/icon-_2_.jpg" alt=""class="icon">
                        <h5>POWER RACK & CAGE</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </section>
        <main>
            <div class="headline">
                <h3>SẢN PHẨM BÁN CHẠY</h3>
            </div>
            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/Body Champ Cardio Dual Trainer.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$342.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/Body Solid GCEC340 Cam Series Leg Extension Curl Machine.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$214.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/Bowflex BXE116 Elliptical.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$421.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/ETHOS GHD Weight Bench.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$152.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/AFG Pro 7.2AI Incline Trainer.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$252.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/Marcy Standard Weight Bench.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$412.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/ProForm Hiit Trainer Lite 5.9.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$300.00</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href=""class="product-thump">
                                <img src="img/Fitness Gear Pro Olympic Weight Bench.png" alt="">
                            </a>
                            <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                            <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                            <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                        </div>
                        <div class="product-bottom">
                            <a href="" class="product-cat">Machine</a>
                            <a href="" class="product-name">AFG Pro 7.2AI Incline</a>
                            <div class="product-price">$124.00</div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="headline-bottom">
                <h2>See What They Say About Us</h2>
            </div>
            <div class="slick-slider">
                <div class="one-time">
                    <div class="slider1">
                        <div class="image-slider">
                            <img src="img/5cdbcad37abe8.jpg" alt="">
                        </div>
                        <p class="text1">“Good services. I bought a bicycle with a wrong but they accepted free return for me and exchange a new product for me.</p>
                        <p class="text2">Lina</p>
                        <p class="text3">Happy clients</p>
                    </div>
                    <div class="slider1">
                    <div class="image-slider">
                            <img src="img/5cdbcad37abe8.jpg" alt="">
                        </div>
                        <p class="text1">“Good services. I bought a bicycle with a wrong but they accepted free return for me and exchange a new product for me.</p>
                        <p class="text2">Lina</p>
                        <p class="text3">Happy clients</p>
                    </div>
                    <div class="slider1">
                    <div class="image-slider">
                            <img src="img/5cdbcad37abe8.jpg" alt="">
                        </div>
                        <p class="text1">“Good services. I bought a bicycle with a wrong but they accepted free return for me and exchange a new product for me.</p>
                        <p class="text2">Lina</p>
                        <p class="text3">Happy clients</p>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="container-bottom">
                    <div class="row">
                        <div class="item1">
                            <img src="img/Brand-1.jpg" alt="">
                        </div>
                        <div class="item1">
                            <img src="img/Brand-2.jpg" alt="">
                        </div>
                        <div class="item1">
                            <img src="img/Brand-3.jpg" alt="">
                        </div>
                        <div class="item1">
                            <img src="img/Brand-4.jpg" alt="">
                        </div>
                        <div class="item1">
                            <img src="img/Brand-5.jpg" alt="">
                        </div>
                        <div class="item1">
                            <img src="img/Brand-6.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </main>

<?php
require ("template/gymload-footer.php")
?>