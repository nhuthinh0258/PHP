<?php
    //signup.php truyền

    $user=$_POST['txtusername'];
    $email=$_POST['txtemail'];
    $pass=$_POST['txtmatkhau'];
    $repass=$_POST['txretmatkhau'];
    
    
    
    
    $conn = mysqli_connect('localhost','root','','gymmax');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "select * from db_user WHERE tendangnhap = '$user'";

    $result01 = mysqli_query($conn,$sql01);

    if(isset($_POST['btnsignup']) && $_POST['txtemail'])
    {
        if(mysqli_num_rows($result01)>0){
            //Cấp thẻ làm việc
            $error="tên tài khoản đã tồn tại";
            header("location:../signup.php?error=$error");
        }
        else
        {
            $sql02 = "select * from db_user WHERE email = '$email'";
            $result02 = mysqli_query($conn,$sql02);
            if(mysqli_num_rows($result02) > 0){
                $error="Email đã tồn tại";
                header("location:../signup.php?error=$error");
            }
            else
            {
                $token = md5($_POST['txtemail']).rand(0,9999);
                $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
                $sql03 = "Insert into db_user (tendangnhap, email, matkhau, email_verification_link) values ('$user','$email','$pass_hash','$token')";
                //Lưu vào database
                $result03= mysqli_query($conn,$sql03);

                //Yêu cầu người dùng kích hoạt
                $link = "<a href='http://nhuthinh0258.live/neweb/activation.php?key=".$email."&token=".$token."'>Click here</a>";
                //Quá trình gửi email
                include "../mailer.php";
                if(SendEmailActiveRegister($email, $link))
                {
                    header("location:../template/register-comfirm.php");
                }
                else
                {
                    header("location:../template/error.php");
                }
            }
    
    
            // if($result02 == true)
            // {
            //     header("location:../template/register-comfirm.php");
            // }
            // else{
            //     header("location:../template/error.php");
            //     // $error="Đã xảy ra lỗi, mời thử lại";
            //     // header("location:../signup.php?error=$error");
            // }
        }
    }
    else
    {

    }



    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>