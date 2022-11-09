<?php
require ("template/gymload-header.php")
?>

<div class="wrapper-login">
    <div class="background">
            <img src="img/Background.jpg" alt="">
    </div>
    <form action="model/process-login.php" id="loginform" method="post" onsubmit="return validateForm()">
        <h1>Đăng nhập</h1>
        <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" class="form-input" placeholder="Tên đăng nhập" name="txtusername" id="txtusername">
            
        </div>
        <label name="lblusername" id="lblusername"></label>
        <br>
        <div class="form-group">
            <i class="fa-solid fa-key"></i>
            <input type="password" class="form-input" placeholder="Mật khẩu" name="txtmatkhau" id="txtmatkhau">
            <div class="eye" id="eye">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <label name="lblmatkhau" id="lblmatkhau"></label>
        <br>
        <?php
            if(isset($_GET['error'])){
                echo"<p style= 'color:red'> {$_GET['error']} </p>";
            }
        ?>
        <ul class="sub-control">
            <li class="sub">
                <a href="">Quên mật khẩu?</a>
            </li>
            <li class="sub">
                <a href="signup.php">Chưa có tài khoản?</a>
            </li>
        </ul>
        <input type="submit" value="Đăng nhập" class="form-submit" name="btnlogin">
    </form>
</div>
        <footer>
            <div class="container-footer">
                <div class="footer-top">
                    <img src="img/Logo.png" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                    <ul>
                        <li><a class="icon-link" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="icon-link" href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="icon-link" href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a class="icon-link" href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <div class="footer-field">
                        <h1>contact us</h1>
                        <ul>
                            <li>
                                <a class="icon-footer1" href="">
                                    <i class="fa-solid fa-location-dot"></i>
                                </a>
                                <a class="icon-footer2" href="">
                                    <p>200 Lincoln Ave, Salinas, CA 93</p>
                                </a>
                            </li>
                            <li>
                                <a class="icon-footer1" href="">
                                    <i class="fa-solid fa-phone-flip"></i>
                                </a>
                                <a class="icon-footer2" href="">
                                    <p>023 32423 223</p>
                                </a>
                            </li>
                            <li>
                                <a class="icon-footer1" href="">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                                <a class="icon-footer2" href="">
                                    <p>gymax@example.com</p>
                                </a>
                            </li>
                            <li>
                                <a class="icon-footer1" href="">
                                    <i class="fa-solid fa-clock"></i>
                                </a>
                                <a class="icon-footer2" href="">
                                    <p>9:00 - 20:00 All day</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-field">
                        <h1>my account</h1>
                        <ul>
                            <li>
                                <a class="text-footer" href="">
                                    My account
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Check out
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Register
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-field">
                        <h1>infomation</h1>
                        <ul>
                            <li>
                                <a class="text-footer" href="">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Contact us
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Terms of user
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Privacy policy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-field">
                        <h1>quick link</h1>
                        <ul>
                            <li>
                                <a class="text-footer" href="">
                                    New user
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Help center
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    Report spam
                                </a>
                            </li>
                            <li>
                                <a class="text-footer" href="">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                    <p>Copyright © 2019 Gymax - Design by ArrowHitech - All Rights Reserved</p>
            </div>
        </footer>
</div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>