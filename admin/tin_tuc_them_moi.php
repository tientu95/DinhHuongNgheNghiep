<!-- <?php 
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
 -->
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
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        
         <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script>
          tinymce.init({
            selector: '#txtMoTa'
          });

          tinymce.init({
            selector: '#txtNoiDung'
          });
        </script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        include('./config/nav_bar.php');
        ;?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff" class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Thêm mới tin tức</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="tin_tuc_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                                <div class="form-group" >
                                                      <label class="control-label col-sm-2">Ngành đào tạo :</label>
                                                      <div class="col-sm-12">
                                                       <select class="form-control" name="id_nganh_dt" id="id_nganh_dt">
                                                    <option value="0">- Chọn ngành -</option>
                                                     <?php
                                                     include("../config.php");
                                                      $sql1 = "SELECT * from tbl_nganh_dao_tao";                                             
                                                      $ketQuaTraVe = mysqli_query($ket_noi, $sql1);                       
                                                      while ($row1 = mysqli_fetch_array($ketQuaTraVe)) {?>                            
                                                          <option value="<?php echo $row1['id_nganh_dt']?>"><?php echo $row1['ten_nganh_dt'];?></option> 
                                                    <?php
                                                    }?>                
                                                  </select>
                                                      </div>
                                                </div>  

                                                <div class="form-group" >
                                                      <label class="control-label col-sm-2">Tiêu đề bài viết :</label>
                                                      <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="txtTieuDe" id="txtTieuDe" placeholder="Tiêu đề">
                                                      </div>
                                                </div>  
                                                  
                                                <div class="form-group" >
                                                      <label class="control-label col-sm-2"> Ảnh minh họa :</label>
                                                      <div class="col-sm-12">
                                                        <input type="file" class="form-control" name="txtAnhMinhHoa" placeholder="Ảnh" id="txtAnhMinhHoa" />
                                                      </div>
                                                </div>
                                                <div class="form-group" >
                                                      <label class="control-label col-sm-2"> Video :</label>
                                                      <div class="col-sm-12">
                                                        <input type="file" class="form-control" name="video" placeholder="Video" id="video" />
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group" >
                                                    <label class="control-label col-sm-2">Mô tả bài viết :</label>
                                                    <div class="col-sm-12">
                                                      <textarea class="form-control"  id="txtMoTa" name="txtMoTa"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <label class="control-label col-sm-2">Nội dung bài viết :</label>
                                                    <div class="col-sm-12">
                                                      <textarea class="form-control"  id="txtNoiDung" name="txtNoiDung"></textarea>
                                                    </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                    <div class="col-sm-3 col-sm-offset-2"></div>
                                                        <div class="col-sm-3 "  style="margin-top: 20px;" >
                                                        <input style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff"  
                                                         type="submit" value="Thêm mới" />
                                                    </div>
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