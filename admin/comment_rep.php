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
                    <?php
                    include('../config.php');
                    $id_comment= $_GET['id'];
                    $sql=" select * from tbl_comment
                            where id_comment= '".$id_comment."'
                            ";
                    $Cmt = mysqli_query($ket_noi, $sql);
                    $TTcmt= mysqli_fetch_array($Cmt);
                    ;?>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Trả lời bình luận</h1>
                    </div>
                    <hr>
                    <div class="spacer-30"></div>
                    <div class="rep_comment">
                        <div class="info--comment">
                            <input type="text" value="<?php echo $TTcmt['ten_nguoi_cmt'];?>" class="form-control" readonly>
                            <input style="margin-top: 30px"type="text"  value="<?php echo $TTcmt['email_cmt'];?>" class="form-control" readonly>
                            <?php
                            if($TTcmt['anh_cmt'] != NULL){
                            ;?>
                            <img src="../img/<?php echo $TTcmt['anh_cmt'];?>" alt="">
                            <?php    
                            }
                            ;?>
                            <input style="margin-top: 30px" type="text" value="<?php echo $TTcmt['noi_dung_cmt'];?>" class="form-control" readonly>
                        </div>
                        <div class="rep_comment__nd">
                            <form class="form-horizontal" method="POST" action="comment_rep-thuc_hien.php?id=<?php echo $id_comment;?>" enctype="multipart/form-data">
                                <input class="form-control" id="" type="file" placeholder="Email" name="anh" />
                                <div class="form-floating mb-3">
                                    <input  style="margin-top: 30px" id="comment" name="txt_noidung" placeholder="Nội dung trả lời" required class="form-control">
                                    <label for="inputEmail">Nội dung trả lời</label>
                                </div>
                                <div  class="form-floating mb-3">
                                    <input style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff"  type="submit" value="Trả lời" />
                                </div>
                            </form>
                           
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
