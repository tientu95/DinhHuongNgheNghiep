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
        <title>Quản trị hệ thống</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        include('./config/nav_bar.php');
        ;?>
            <div id="layoutSidenav_content">
                <main>
                    <?php 
                        include("../config.php");
                        $sql="  select * from tbl_nganh_dao_tao
                                ";

                        $sql1="  select * from tbl_chuyen_nganh
                                ";

                        $sql2="  select * from tbl_comment
                                ";

                        $sql3="  select * from tbl_nghe_nghiep
                                ";

                        $sql4="  select * from tbl_tin_tuc
                                ";

                        $sql5="  select * from tbl_admin
                                ";
                        $sql6 = "select * from tbl_lien_he
                                    ";
                        $so_luong_nganh_dt = mysqli_num_rows(mysqli_query($ket_noi, $sql));
                        $so_luong_chuyen_nganh = mysqli_num_rows(mysqli_query($ket_noi, $sql1));
                        $so_luong_comment = mysqli_num_rows(mysqli_query($ket_noi, $sql2));
                        $so_luong_nghe_nghiep = mysqli_num_rows(mysqli_query($ket_noi, $sql3));
                        $so_luong_tin_tuc = mysqli_num_rows(mysqli_query($ket_noi, $sql4));
                        $so_luong_admin = mysqli_num_rows(mysqli_query($ket_noi, $sql5));
                        $so_luong_lien_he = mysqli_num_rows(mysqli_query($ket_noi, $sql6));
                                
                    ;?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị hệ thống</h1>
                        <br> <br> <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị ngành đào tạo (<?php echo $so_luong_nganh_dt ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="nganh_dt.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị chuyên ngành (<?php echo $so_luong_chuyen_nganh ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="chuyen_nganh.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị nghề nghiệp (<?php echo $so_luong_nghe_nghiep ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="nghe_nghiep.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị tin tức (<?php echo $so_luong_tin_tuc ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tin_tuc.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị bình luận (<?php echo $so_luong_comment ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="comment.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị người dùng (<?php echo $so_luong_admin ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div><div class="col-xl-3 col-md-6">
                                <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936);" class="card text-white mb-4">
                                    <div class="card-body">Quản trị Liên hệ (<?php echo $so_luong_lien_he ;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="lien_he.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
