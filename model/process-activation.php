<?php
if ($_GET['key'] && $_GET['token']) {
    $conn = mysqli_connect('localhost','root','','gymmax');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $email = $_GET['key']; //Bắt giá trị trên URL
    $token = $_GET['token'];//Bắt giá trị trên URL
    $sql01 = "select * from db_user where email_verification_link = '".$token."' and email = '".$email."'";
    $result = mysqli_query($conn,$sql01);
    $d = date('Y-m-d H:i:s'); //Tạo một biến lưu thời gian
    if (mysqli_num_rows($result) > 0) { //tìm xem có bản ghi nào trong database khớp với thông tin này không
        $row = mysqli_fetch_array($result); // Lấy ra thông tin bản gi này
        if ($row['email_verification_at'] == NULL) {
            $sql02 = "update db_user set email_verification_at = '$d', status = 1 where email='$email'";
            mysqli_query($conn, $sql02);
            $msg01 = "Kích hoạt tài khoản thành công";
            $msg02 = "Bạn đã kích hoạt tài khoản thành công, vui lòng đăng nhập để tiếp tục sử dụng website";
        } else {
            $msg01 = "Kích hoạt tài khoản không thành công";
            $msg02 = "Bạn đã kích hoạt tài khoản này với chúng tôi";
        }
    } else {
        $msg01 = "Kích hoạt tài khoản không thành công";
        $msg02 = "Email này chưa được sử dụng để đăng ký tài khoản";
    }
} else {
    header("location:../template/error.php");
}
