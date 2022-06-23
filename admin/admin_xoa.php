<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();

    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
;?>
<?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id_admin = $_GET["id"];

            $sql = "
                DELETE 
                FROM `tbl_admin` 
                WHERE `tbl_admin`.`id_admin` = '".$id_admin."'
            ";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $admin = mysqli_query($ket_noi, $sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa thành công');
                    window.location.href='admin.php';
                </script>
            ";
        ;?>