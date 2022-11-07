<?php
    //signup.php truyền
    if(isset($_POST['btnsignup'])){
        if(isset($_POST['txtemail']) && $_POST['txtemail'] != ''){
            include "../mailer.php";
            if(SendEmailActiveRegister($_POST['txtemail'])){
                header("location:../template/register-comfirm.php");
            }
            else{
                header("location:../template/error.php");
            }
        }
    }
    else{
        header("location:../signup.php");
    }

    $user=$_POST['txtusername'];
    $email=$_POST['txtemail'];
    $pass=$_POST['txtmatkhau'];
    $repass=$_POST['txtrematkhau'];
    
    
    
    
    $conn = mysqli_connect('localhost','root','','gymmax');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "select * from db_user WHERE tendangnhap = '$user' or email = '$email'";

    $result01 = mysqli_query($conn,$sql01);

    if(mysqli_num_rows($result01)>0){
        //Cấp thẻ làm việc
        $error="tên tài khoản hoặc email đã tồn tại";
        header("location:../signup.php?error=$error");
    }
    else
    {
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql02 = "Insert into db_user (tendangnhap, email, matkhau,status) values('$user','$email','$pass_hash',0)";
        $result02= mysqli_query($conn,$sql02);

        if($result02 == true)
        {
            header("location:../template/register-comfirm.php");
        }
        else{
            header("location:../template/error.php");
            // $error="Đã xảy ra lỗi, mời thử lại";
            // header("location:../signup.php?error=$error");
        }
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>