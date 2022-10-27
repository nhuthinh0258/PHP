<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // add-nhanvien: NHẬN DỮ LIỆU TỪ admin.php gửi sang
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
    $sql = "Insert into tb_nhanvien (hoten,chucvu, sdt_didong,email, ma_donvi) VALUES ('$hoten','$chucvu','$sdt','$email','$madonvi')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location:admin.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location:error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>