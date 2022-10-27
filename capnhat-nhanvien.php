
<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nhanvien = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "select * from tb_nhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
<?php
include("template/header-admin.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Sửa Nhân Viên</h5>
        <div>
        <form action="process-capnhat-nhanvien.php" method="POST">
            <div class="form-group">
                <label for="txtid" class="form-label">ID</label>
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['ma_nhanvien']; ?>">
                <?php echo $row['ma_nhanvien']; ?>
            </div>
            <div class="form-group">
                <label for="txtTen" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="txtTen" id="txtTen" value="<?php echo $row['hoten']; ?>">
            </div>
            <div class="form-group">
                <label for="txtchucvu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" name="txtchucvu" id="txtchucvu" value="<?php echo $row['chucvu']; ?>">
            </div>
            <div class="form-group">
                <label for="txtsdt" class="form-label">Số điện thoại di động</label>
                <input type="text" class="form-control" name="txtsdt" id="txtsdt" value="<?php echo $row['sdt_didong']; ?>">
            </div>
            <div class="form-group">
                <label for="txtemail" class="form-label">Email</label>
                <input type="text" class="form-control" name="txtemail" id="txtemail"  value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="txtmadonvi" class="form-label">Mã đơn vị</label>
                <input type="text" class="form-control" name="txtmadonvi" id="txtmadonvi" value="<?php echo $row['ma_donvi']; ?>">
            </div>
                    <?php
                              
                            $ma_nhanvien = $_GET['id'];

                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost','root','','danhba');
                            if(!$conn){
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "select * from tb_nhanvien";
                            // Bước 03: Đóng kết nối
                            mysqli_close($conn);
                    ?>
                </select>
            <button type="submit" class="btn btn-primary mt-3">Sửa</button>
            </form>
        </div>
    </div>    
    </main>

<?php
include("template/footer-admin.php");
?>