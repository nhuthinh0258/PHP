<?php
require ("model/process-product-list.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link css -->
    <link href="css/product-list.css" rel="stylesheet"/>
    <link href="font/css/all.css" rel="stylesheet"/>
    <link href="css/slick-theme.css" rel="stylesheet"/>
    <link href="css/slick.css" rel="stylesheet"/>

    <!-- link js -->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/slick.min.js"></script>

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
                                    <li><a href="product-list.php">Giày</a></li>
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
    </div>

    <div class="wp-content">
        <div class="sidebar"></div>
        <div class="content">
            <div class="headline">
                <h3>Danh sách sản phẩm</h3>
            </div>
            <ul class="products">
                <?php foreach($result as $item):?>
                    <li>
                        <div class="product-item">
                            <div class="product-top">
                                <a href=""class="product-thump">
                                    <img src="img-product/<?=$item['image']?>" alt="">
                                </a>
                                <a href="" class="product-cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                <a href=""class="product-show"><i class="fa-solid fa-eye"></i></a>
                                <a href=""class="product-heart"><i class="fa-solid fa-heart"></i></a>
                                <a href=""class="product-repeat"><i class="fa-sharp fa-solid fa-repeat"></i></a>
                            </div>
                            <div class="product-bottom">
                                <a href="" class="product-cat"><?=$item['loaisp']?></a>
                                <a href="" class="product-name"><?=$item['tensp']?></a>
                                <div class="product-price"><?=$item['giatien']?></div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- <li>
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
                    </li> -->
                
                <?php endforeach ?>
            </ul>
            <ul class="list_trang">
                <?php
                for($i=1;$i<=$trang;$i++){
                ?>
                <li><a <?php if($i==$page){echo 'style="color:#763626"';} else{echo '';} ?> href="product-list.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    
</body>
</html>