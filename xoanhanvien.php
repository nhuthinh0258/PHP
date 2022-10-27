<?php
    //admin.php truyền dữ liệu sang
    //xoanhanvien.php nhận dữ liệu từ admin.php
    $ma_nhanvien=$_GET['id'];

    // kết nối database
    $conn = mysqli_connect('localhost','root','','danhba');
    if(!$conn){
        die("kết nối thất bại, vui lòng kiểm tra lại thông tin máy chủ");
    }

    //thực hiện truy vấn 
    $sql= "delete FROM tb_nhanvien where ma_nhanvien='$ma_nhanvien'";
    $number = mysqli_query($conn,$sql);

    if($number>0){
        header("location:admin.php");
    }
    else{
        header("location:error.php");
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>