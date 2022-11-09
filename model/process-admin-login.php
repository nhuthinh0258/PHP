<?php
    // login.php TRUYỀN DỮ LIỆU SANG
    session_start();

if(isset($_POST['btnloginad'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
    

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','gymmax');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "select * from db_user WHERE tendangnhap = '$user'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        
        $row=mysqli_fetch_assoc($result);

        //Lấy ra chuỗi mật khẩu băm
        $pass_hash=$row['matkhau'];
        $active = $row['status'];
        $active2 = $row['admin'];

        if($active ==1){
            if($active2 ==1){
                if(password_verify($pass,$pass_hash)){
                    $_SESSION['isLoginad']=$user;
                    header("location:../admin.php");
                }
                else{
                    $error="mật khẩu không chính xác";
                    header("location:../admin-login.php?error=$error");
                }
            }
            else{
                $error="Bạn không thể đăng nhập vào đây";
                header("location:../admin-login.php?error=$error");
            }
        }
        else{
            $error="Tài khoản chưa kích hoạt";
            header("location:../admin-login.php?error=$error");
        }
    }
    else{
        $error="tài khoản không chính xác";
        header("location:../admin-login.php?error=$error");
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
else{
    header("location: ../admin-login.php");
}
?>