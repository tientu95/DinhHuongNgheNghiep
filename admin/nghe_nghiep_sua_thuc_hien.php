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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật nghề nghiệp</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id_nghe_nghiep = $_POST['txtID'];
            $id_chuyen_nganh = $_POST['txtTLid'];
            $ten_nghe_nghiep = $_POST['txtten_nghe_nghiep'];
            $mo_ta_nghe = $_POST['txtMoTa'];
            $noi_dung = $_POST['txtNoidung'];
           
        
                $sql = "UPDATE `tbl_nghe_nghiep` 
                SET `id_chuyen_nganh` = '".$id_chuyen_nganh."', `ten_nghe_nghiep` = '".$ten_nghe_nghiep."', `mo_ta_nghe` = '".$mo_ta_nghe."', `noi_dung` = '".$noi_dung."'WHERE `tbl_nghe_nghiep`.`id_nghe_nghiep` = '".$id_nghe_nghiep."';      


              
                ";
            

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nghe_nghiep = mysqli_query($ket_noi, $sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật thành công');
                    window.location.href='nghe_nghiep.php';
                </script>

            ";

        ;?>

    </body>
</html>


