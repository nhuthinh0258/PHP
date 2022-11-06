<?php
    // login.php TRUYỀN DỮ LIỆU SANG
    session_start();

if(isset($_POST['btnlogin'])){
        $user=$_POST['txtusername'];
        $pass=$_POST['txtmatkhau'];
    

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

        //So sánh và kiểm tra mật khẩu thô với mật khẩu băm
        if(password_verify($pass,$pass_hash)){
            
        //Cấp thẻ làm việc
        $_SESSION['isLoginok']=$user;
        header("location:../giaodien-user.php");
        }
        else{
            $error="mật khẩu không chính xác";
            header("location:../login.php?error=$error");
        }
    }
    else
    {
        $error="tài khoản không chính xác";
        header("location:../login.php?error=$error");
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
else{
    header("location: ../login.php");
}
?>