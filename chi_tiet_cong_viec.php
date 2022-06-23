<?php 
session_start();
include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <title>Chi tiết công việc</title>
    <link class="icon_tittle" rel="icon" href="./assets/img/Logo.ico" type="image/x-icon" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Vrinda Maru Kansal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- SLIDER REVOLUTION CSS SETTINGS -->
    <link href="plugin/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Search Overlay Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="ion ion-ios-search"></i></button>
        </form>
    </div>
    <!-- End Search Overlay Menu -->

    <!-- Site Wraper -->
    <div class="wrapper">

         <!-- Header -->
         <?php
            include('./format/nav_menu.php');
        ;?>
        <?php 
         $id_nghe_nghiep = $_GET["id"];
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("./config.php");

            // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
            
            $sql = "
                    SELECT * 
                    FROM  tbl_nghe_nghiep
                    WHERE id_nghe_nghiep='".$id_nghe_nghiep."'
                    ";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nghe_nghiep = mysqli_query($ket_noi, $sql);

            // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
            $row = mysqli_fetch_array($nghe_nghiep)
        ;?>
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
				<div class="row">
				<div class="col-md-8 col-md-offset-2 title">
					<div class="item-box col-md-5 col-sm-5 col-sm-offset-0 col-xs-8 col-xs-offset-2 mb-30">
						<img alt="1" src="img/Dunggach.jpg" class="item-container">                            
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 text-center">
						<h2 class="h3"><?php echo $row["ten_nghe_nghiep"] ?></h2>
						<div class="page-breadcrumb">
							<a href="index.php">Trang chủ</a>/<a>Chi tiết công việc</a>
						</div>
					</div>
                </div>
				</div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
       
				<div class="job-description"> 
					<div class="job-description__main">
                        <div id="tabs-1">
                            <div class="container text-left">
                                <div class="row mtb-30">
                                    <div style="width: 80%" class="col-md-8 col-sm-8 col-xs-12">
                                        <h6> <?php echo $row["mo_ta_nghe"] ;?> </h6>             
                                         <p><?php echo $row["noi_dung"] ?></p>							
                                    </div>
                                </div>	
                                <hr>
                            </div>
                        </div>
					</div>

					<div class="job__sub--s">
                    <div class="job__sub">
                        <h6>Nghê nghiệp liên quan</h6>
                        <hr>
                    </div>  
                        <div class="job__sub">
                        <?php 
                       
                       // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                       include("./config.php");
     
                       // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                       $sql = "
                                 SELECT * 
                                 FROM tbl_nghe_nghiep JOIN tbl_chuyen_nganh 
                                 ON tbl_nghe_nghiep.id_chuyen_nganh = tbl_chuyen_nganh.id_chuyen_nganh
                                 WHERE tbl_chuyen_nganh.id_chuyen_nganh='".$row["id_chuyen_nganh"]."'
                                 and tbl_nghe_nghiep.id_nghe_nghiep !=  '".$id_nghe_nghiep."'
                                 
                       ";
     
                       // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                       $nghe_nghiep = mysqli_query($ket_noi, $sql);
     
                       // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                       while ($row = mysqli_fetch_array($nghe_nghiep)) {
                    ;?>
                        <div class="row mtb-30">
                        
                            <div class="item-box col-md-4 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 mb-sm-30">
                                <a href="chi_tiet_cong_viec.php?id=<?php echo $row["id_nghe_nghiep"];?>"><img alt="1" src="<?php echo $row['anh_nghe'] ? 'img/'.$row['anh_nghe'] : 'img/img_trong.jpg';?>" class="item-container"></a>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <h6><a href="chi_tiet_cong_viec.php?id=<?php echo $row["id_nghe_nghiep"];?>"><?php echo $row["ten_nghe_nghiep"] ;?></a></h6>
                            </div>

                        </div>	
                    <?php 
                        }
                    ?>
                        </div>
                        
					</div>
								   									                                                        
				</div>
                <!-- comment -->
                

        <!-- End CONTENT ------------------------------------------------------------------------------>

           <!-- FOOTER -->
           <?php
                include('./format/footer.php');
            ;?>
    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>


</body>
</php>
