<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $ten_admin = $_POST['txtTen_admin'];
            $email = $_POST['txtEmail'];
            $pass = $_POST['txtPass'];
            $sql = "
            INSERT INTO `tbl_admin` (`id_admin`, `ten_admin`, `password`, `email`) VALUES (NULL, '".$ten_admin."', '".$pass."', '".$email."');
            ";

            // 2. Thực thi câu lệnh lấy dữ liệu mong muốn
            $admin = mysqli_query($ket_noi, $sql);

            // 3. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới thành công');
                    window.location.href='admin.php';
                </script>

            ";

        ;?>

    </body>
</html>
