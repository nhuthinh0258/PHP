<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id=$_POST['id'];
    $hoten = $_POST['txtTen'];
    $chucvu= $_POST['txtchucvu'];
    $sdt=$_POST['txtsdt'];
    $email=$_POST['txtemail'];
    $madonvi=$_POST['txtmadonvi'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "update tb_nhanvien SET hoten='$hoten',chucvu='$chucvu',sdt_didong='$sdt',email='$email',ma_donvi='$madonvi' WHERE ma_nhanvien=$id";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location:admin.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location:error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>