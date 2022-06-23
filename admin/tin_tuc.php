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
        <title>Quản trị tin tức</title>
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị tin tức</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Quản trị tin tức</li>
                        </ol>
                        <div class="card mb-4">
                        <div class="card-header" style = "display: flex; justify-content: space-between;">
                                <div> 
                                    <i class="fas fa-table me-1"></i>
                                    Danh sách tin tức
                                </div >
                                <div style="height: 36px; background-image: repeating-radial-gradient(0,#179EA1, #1a2936);">
                                    <a style="color: white; text-decoration: none; line-height: 36px; padding: 0 6px; font-weight: 500;" href="tin_tuc_them_moi.php">Thêm mới</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr >
                                            <th>STT</th>
                                            <th>Ngành đào tạo</th> 
                                            <th>Tiêu đề tin tức</th>
                                            <th>Ngày đăng tin</th>
                                            <th>Số lần đọc</th>
                                            <th>Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                             <th>Ngành đào tạo</th>
                                            <th>Tiêu đề tin tức</th>
                                            <th>Ngày đăng tin</th>
                                            <th>Số lần đọc</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                        include("../config.php");

                                        // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                                        $sql = "
                                                  SELECT * 
                                                  FROM tbl_tin_tuc JOIN tbl_nganh_dao_tao ON tbl_tin_tuc.id_nganh_dt=tbl_nganh_dao_tao.id_nganh_dt
                                                  ORDER BY id_tin_tuc DESC
                                        ";

                                         // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                                        $tin_tuc = mysqli_query($ket_noi, $sql);

                                        // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                                        $i=0;
                                        while ($row = mysqli_fetch_array($tin_tuc)) {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                           <td><?php echo $row["ten_nganh_dt"]; ?></td> 
                                            <td><?php echo $row["tieu_de"];?></td>
                                            <td><?php echo $row["ngay_dang"];?></td>
                                            <td><?php echo $row["so_lan_xem"];?></td>
                                            <td style="display: flex; justify-content: space-around;">
                                                <a class="btn btn-success" href="tin_tuc_sua.php?id=<?php echo $row["id_tin_tuc"];?>">Sửa</a>
                                                <a class="btn btn-danger" href="tin_tuc_xoa.php?id=<?php echo $row["id_tin_tuc"];?>">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ;?>
                                    </tbody>
                                </table>
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
