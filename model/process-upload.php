<?php
$conn = mysqli_connect('localhost', 'root', '', 'gymmax');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}

// tạo một biến nhằm lưu lại trạng thái uploads để phản hôi
$statusMsg = '';

// File upload path

//Thư mục dùng để lưu file uploads
$targetDir = "../img-product/";
$fileName = basename($_FILES["myfile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


//Kiểm tra người dùng đã nhấn nút submit và không để trống file upload
if (isset($_POST["btnupload"]) && !empty($_FILES["myfile"]["name"])) {
    if (file_exists($targetFilePath)) {
        echo "Tệp tin đã tồn tại";
    } else {
        // Khai báo biến mảng lưu trữ các định dạng bạn được phép upload
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

        //Phương thức in_array kiểm tra file có giá trị thuộc mạng hay không
        if (in_array($fileType, $allowTypes)) {

            // Nếu có thì xử lý upload tệp tin đang ở thư mục TMP
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $sql = "INSERT into db_images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $statusMsg = "The file " . $fileName . " file đã được upload thành công.";
                } else {
                    $statusMsg = "Upload file thất bại, vui lòng thử lại.";
                }
            } else {
                $statusMsg = "Xin lỗi, đã có sự cố xảy ra khi upload file của bạn.";
            }
        } else {
            $statusMsg = 'Xin lỗi, chỉ các file có đuôi JPG, JPEG, PNG, GIF, & PDF mới được upload.';
        }
    }
} else {
    $statusMsg = 'Bạn chưa chọn file để upload.';
}

// Display status message
echo $statusMsg;
