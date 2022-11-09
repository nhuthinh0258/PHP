<?php
require ("template/gymload-header.php")
?>

<div class="wrapper-signup">
    <div class="background">
            <img src="img/Background.jpg" alt="">
    </div>
    <form action="model/process-signup.php" id="signupform" method="post" onsubmit="return validateForm()">
        <h1>Đăng ký ngay</h1>
        <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" class="form-input" placeholder="Tên đăng nhập" name="txtusername" id="txtusername" required>
        </div>
        <label name="lblusername" id="lblusername"></label>
        <br>
        <div class="form-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" class="form-input" placeholder="Email" name="txtemail" id="txtemail" required>
        </div>
        <label name="lblemail" id="lblemail"></label>
        <br>
        <div class="form-group">
            <i class="fa-solid fa-key"></i>
            <input type="password" class="form-input" placeholder="Mật khẩu" name="txtmatkhau" id="txtmatkhau" onkeyup='check();' required>
            <div class="eye" id="eye">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <label name="lblmatkhau" id="lblmatkhau"></label>
        <br>
        <div class="form-group">
            <i class="fa-solid fa-key"></i>
            <input type="password" class="form-input" placeholder="Nhập lại mật khẩu" name="txtcmatkhau" id="txtcmatkhau" onkeyup='check();' required>
            <div class="eye" id="eye2">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <span name="lblcmatkhau" id="lblcmatkhau"></span>

        <?php
            if(isset($_GET['error'])){
                echo"<p style= 'color:red'> {$_GET['error']} </p>";
            }
        ?>

        <input type="submit" value="Đăng ký" class="form-submit" name="btnsignup">
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
    <script src="js/signup.js"></script>
</body>
</html>