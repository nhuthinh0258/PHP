<?php
require ("template/header-admin.php")
?>
    <main>
    <div class="container">
        <h3 class="text-center text-primary mt-5 mb-5">Danh bạ các công ty</h3>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Số di động</th>
                    <th scope="col">email</th>
                    <th scope="col">Tên đơn vị</th>
                    <th scope="col">Cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- vùng dữ liệu động cần lặp lại từ CSDL -->

                    <?php
                    // kết nối database
                    $conn = mysqli_connect('localhost','root','','danhba');
                    if(!$conn){
                        die("kết nối thất bại, vui lòng kiểm tra lại thông tin máy chủ");
                    }

                    //thực hiện truy vấn 
                    $sql= "Select * FROM tb_nhanvien";
                    $result = mysqli_query($conn,$sql);

                    //Xử lý kết quả trả về
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>

                        <tr>
                            <th scope="row"><?php echo $row['ma_nhanvien']; ?></th>
                            <td><?php echo $row['hoten']; ?></td>
                            <td><?php echo $row['chucvu']; ?></td>
                            <td><?php echo $row['sdt_didong']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['ma_donvi']; ?></td>
                            <td><a href="capnhat-nhanvien.php?id=<?php echo $row['ma_nhanvien']; ?>">Cập nhật</a><a href="xoanhanvien.php?id=<?php echo $row['ma_nhanvien']; ?>"><i class="bi bi-trash"></i></a></td>
                        </tr>
                        
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
    </div>
    </main>
    
    
<?php
require ("template/footer-admin.php")
?>