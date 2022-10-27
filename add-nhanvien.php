<?php
include("template/header-admin.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm nhân viên</h5>
        <div>
        <form action="process-add-nhanvien.php" method="POST">
            <div class="mb-3">
                <label for="txtTen" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="txtTen" id="txtTen">
            </div>
            <div class="mb-3">
                <label for="txtchucvu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" name="txtchucvu" id="txtchucvu">
            </div>
            <div class="mb-3">
                <label for="txtsomayban" class="form-label">Số điện thoại di động</label>
                <input type="text" class="form-control" name="txtsdt" id="txtsdt">
            </div>
            <div class="mb-3">
                <label for="txtdidong" class="form-label">Email</label>
                <input type="text" class="form-control" name="txtemail" id="txtemail">
            </div>
            <div class="mb-3">
                <label for="txtemail" class="form-label">Mã đơn vị</label>
                <input type="text" class="form-control" name="txtmadonvi" id="txtmadonvi">
            </div>
                    <?php
                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost','root','','danhba');
                            if(!$conn){
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "SELECT * FROM tb_nhanvien";

                            $result = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){
                    ?>
                                    
                    <?php
                                }
                            }
                            // Bước 03: Đóng kết nối
                            mysqli_close($conn);
                    ?>
                </select>
            <button type="submit" class="btn btn-primary mt-3">Thêm</button>
            </form>
        </div>
    </div>    
    </main>

<?php
include("template/footer-admin.php");
?>