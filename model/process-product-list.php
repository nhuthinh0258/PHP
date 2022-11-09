<?php
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','gymmax');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn

    if(isset($_GET['trang'])){
        $page=$_GET['trang'];
    }
    else
    {
        $page='';
    }
    if($page == '' || $page== 1)
    {
        $begin = 0;
    }
    else
    {
        $begin=($page*12)-12;
    }

    $sql = "select * from db_product,db_product_type,db_images where status =1 and db_product.ma_loaisp=db_product_type.ma_loaisp and db_product.id_image=db_images.id order by db_product.ma_sp asc limit $begin,12";

    $result = mysqli_query($conn,$sql);

    //Phân trang danh sách sản phẩm
    $sql2= mysqli_query($conn,"select * from db_product,db_product_type,db_images where status =1 and db_product.ma_loaisp=db_product_type.ma_loaisp and db_product.id_image=db_images.id");
    $row_count = mysqli_num_rows($sql2);
    $trang = ceil($row_count/12);

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>