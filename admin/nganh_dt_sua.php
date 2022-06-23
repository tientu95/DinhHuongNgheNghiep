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
        <title>Cập nhật tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
          tinymce.init({
            selector: '#txtMoTa'
          });

        </script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        include('./config/nav_bar.php');
        ;?>
            <?php 
                // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                include("../config.php");

                // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                $id_nganh_dt = $_GET["id"];

                $sql = "
                          SELECT * 
                          FROM tbl_nganh_dao_tao
                          WHERE id_nganh_dt = '".$id_nganh_dt."'
                ";

                // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                $nganh_dt = mysqli_query($ket_noi, $sql);

                // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                $row = mysqli_fetch_array($nganh_dt);
            ;?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff;" class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Sửa thông tin</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="nganh_dt_sua_thuc_hien.php" enctype="multipart/form-data">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" required placeholder="Tên ngành" name="txtTen_nganh" value="<?php echo $row["ten_nganh_dt"];?>" />
                                                <label for="inputEmail">Tên ngành</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea required placeholder="Mô tả" name="txtMoTa" id="txtMoTa"><?php echo $row["mo_ta_nganh_dt"];?></textarea>
                                                <label for="inputEmail">Mô tả</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <input type="hidden" name="txtID" value="<?php echo $row["id_nganh_dt"];?>">
                                                <input style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff; font-weight:500;" type="submit" name="btnSubmit" value="Cập nhật">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bản quyền &copy; Sinh viên Hệ thống thông tin quản lý</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
