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
    $tieu_de = $_POST['txtTieuDe'];
    $id_nganh_dt=$_POST['id_nganh_dt'];
    $mo_ta = $_POST['txtMoTa'];
    $noi_dung = $_POST['txtNoiDung'];

    // Lấy ra được thông tin & xử lý liên quan đến bức ẢNH MINH HỌA được SUBMIT từ form TIN TỨC THÊM MỚI
    $noi_se_luu_buc_anh_tren_website = "../img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $luu_file_anh_tam = $_FILES["txtAnhMinhHoa"]["tmp_name"];

    // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
    $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

    // Lấy ra được thông tin & xử lý liên quan đến video được SUBMIT từ form TIN TỨC THÊM MỚI
    $noi_se_luu_video_tren_website = "../media/".basename($_FILES["video"]["name"]);
    $luu_file_video_tam = $_FILES["video"]["tmp_name"];

    // UPLOAD bức video tạm này lên MÁY CHỦ WEB
    $ket_qua_up_video = move_uploaded_file($luu_file_video_tam, $noi_se_luu_video_tren_website);

    // Ghi nhận thông tin bức ẢNH MINH HỌA được UPLOAD lên hệ thống hay chưa?
    if(!$ket_qua_up_anh) {
        $anh_minh_hoa = NULL;
    } 
    else {
        $anh_minh_hoa = basename($_FILES["txtAnhMinhHoa"]["name"]);
    }
    
    if(!$ket_qua_up_video){
        $video = NULL;
    }
    else{
        $video = basename($_FILES["video"]["name"]);
    }

    $sql = "
    INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `id_nganh_dt`, `tieu_de`, `mo_ta`, `noi_dung`, `ngay_dang`, `anh`, `video`, `ghi_chu`, `so_lan_xem`) 
                        VALUES (NULL, '".$id_nganh_dt."', '".$tieu_de."', '".$mo_ta."', '".$noi_dung."', current_timestamp(), '".$anh_minh_hoa."', '".$video."', NULL, 0)
    ";


    // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
    $tin_tuc = mysqli_query($ket_noi, $sql);

    // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
    echo "
        <script type='text/javascript'>
            window.alert('Bạn đã thêm mới bài viết thành công');
            window.location.href='tin_tuc.php';
        </script>

    ";

;?> 
</body>
</html>
