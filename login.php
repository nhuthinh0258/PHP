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
            <div class="test">
                Xin chao
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>