<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
<meta charset="utf-8" />
    <title>Công việc liên qua</title>
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
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
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
        <!-- End Header -->

        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- Intro Section -->
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Tìm kiếm</h2>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a>/<span>Tìm kiếm</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="ptb-60 ptb-sm-60">
        <?php 
        
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("./config.php");

            // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
           
              $tim_kiem=$_POST['txttimkiem'];

            $sql = "
                    SELECT * 
                    FROM  tbl_nghe_nghiep
                    WHERE tbl_nghe_nghiep.noi_dung OR tbl_nghe_nghiep.mo_ta_nghe OR tbl_nghe_nghiep.ten_nghe_nghiep 
                    LIKE '%".$tim_kiem."%'
                    
                    ";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nghe_nghiep = mysqli_query($ket_noi,$sql);

            // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
           
        ;?>
            <div class="jobs ">
            <?php  
             while ($row = mysqli_fetch_array($nghe_nghiep)) {
                ;?>

                <div class="job">
                        <a style="flex:0.8;" href="chi_tiet_cong_viec.php?id=<?php echo $row["id_nghe_nghiep"] ;?>"><img alt="1" src="img/<?php echo $row["anh_nghe"] ;?>" class="job-image"></a>
                       
                    <div class="job-content">
                        <h6 class="job-title"><a href="chi_tiet_cong_viec.php?id=<?php echo $row["id_nghe_nghiep"];?>"><?php echo $row["ten_nghe_nghiep"] ;?></a></h6>
                        <p class="job-mota"><?php echo $row["mo_ta_nghe"] ;?></p>								
                    </div>
                </div>
                <?php 
                    }
                 ?>
                
                   
            </div>
								
        </section>
        <!-- End CONTENT ------------------------------------------------------------------------------>

           <!-- FOOTER -->
           <?php
           include('./format/footer.php');
           ;?>
        <!-- End Scroll Top -->

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