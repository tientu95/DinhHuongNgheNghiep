<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
        <?php 
          include("config.php");

          $id_nganh_dt = $_GET['id'];
          $sql = "
                    SELECT * 
                    FROM tbl_nganh_dao_tao
                    WHERE id_nganh_dt = '".$id_nganh_dt."'
          ";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_nganh = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          $row = mysqli_fetch_array($noi_dung_nganh)
       ;?>
    <meta charset="utf-8" />
    <title>Định hướng | <?php echo $row['ten_nganh_dt'];?></title>
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
        <!-- End Header -->

        <!-- CONTENT --------------------------------------------------------------------------------->
        <?php 
          include("config.php");

          $id_nganh_dt = $_GET['id'];
          $sql = "
                    SELECT * 
                    FROM tbl_nganh_dao_tao
                    WHERE id_nganh_dt = '".$id_nganh_dt."'
          ";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_nganh = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          $row = mysqli_fetch_array($noi_dung_nganh)
       ;?>
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
                <div class="row title">
                    <h2 class="h2"><?php echo $row['ten_nganh_dt']  ;?></h2>
                    <div style="background-color: #fff; width: 260px; margin: auto">
					<h6 ><a href="danh_sach_cong_viec.php?idCN=<?php echo  $row['id_nganh_dt'] ;?>">Cơ hội nghề nghiệp</a></h6>    
                    </div>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a><span> / Định hướng</span> <span> / <?php echo $row['ten_nganh_dt']  ;?></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->		
        <!-- Options Section -->
        <section class="ptb-60 ptb-sm-30">
			<div class="tabs mt-15">
                <div class="ml-15">
                    <h3><?php echo $row['ten_nganh_dt']  ;?></h3>
                </div>
                <div class="ui-tab-content">                        
                <!-- Competitions -->
                    <div id="tabs-1">
                        <div class="container text-left">
                            <div class="mb-30">	
                                <hr>
                                <div class="spacer-30"></div>
                                <div class=" noi_dung">
                                    <div>
                                        <?php echo $row['mo_ta_nganh_dt'];?>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </section>
        <?php
            include('./format/footer.php');
        ;?>
        <!-- END FOOTER -->
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
