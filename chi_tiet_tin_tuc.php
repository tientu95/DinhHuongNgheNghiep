<?php
        session_start();
        include('config.php');
        $id_tin_tuc = $_GET['id'];
        $sql_cn=" select *
                    from tbl_tin_tuc
                    where tbl_tin_tuc.id_tin_tuc='".$id_tin_tuc."'
                    ";
        $tin_tuc_cap_nhat= mysqli_fetch_array(mysqli_query($ket_noi,$sql_cn));
        $_SESSION['luotxem']= $tin_tuc_cap_nhat['so_lan_xem'];
        if(isset($_SESSION['luotxem']))
        $_SESSION['luotxem']+=1;
        include('./format/dem_truy_cap.php');
;?>   
<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <title>Chi tiết tin tức</title>
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
        <?php
            include('config.php');
            $id_tin_tuc = $_GET['id'];
            // Cau lenh cap nhat so lan xem
            $sql_cap_nhat= " UPDATE `tbl_tin_tuc` 
            SET `so_lan_xem` = '".$_SESSION['luotxem']."'
            WHERE `tbl_tin_tuc`.`id_tin_tuc` = '".$id_tin_tuc."' ";
            $cap_nhat_lan_xem = mysqli_query($ket_noi, $sql_cap_nhat);
            // end cap nhat
            //chi tiet tin tuc
            $sql=" select *
            from tbl_tin_tuc
            where tbl_tin_tuc.id_tin_tuc='".$id_tin_tuc."'
            ";
            $sql_name="select *
            from tbl_tin_tuc
                        join tbl_nganh_dao_tao  on 
                        tbl_tin_tuc.id_nganh_dt = tbl_nganh_dao_tao .id_nganh_dt
                        where tbl_tin_tuc.id_tin_tuc = '".$id_tin_tuc."'
                        ";
                        $tin_tuc=mysqli_query($ket_noi,$sql);
                        $noi_dung_tin_tuc=mysqli_fetch_array($tin_tuc);
                        $nganh_dao_tao=mysqli_fetch_array(mysqli_query($ket_noi,$sql_name));
        ;?>
        <!-- cap nhat lan xem -->
        <p style="display: none;"><?php if(isset($_SESSION['luotxem']))  echo $_SESSION['luotxem'];?></p>
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
				<div style="margin-top: 2%;" class="row">
				<div class="col-md-8 col-md-offset-2 title" style="margin:auto;">
					<div class="item-box col-md-5 col-sm-5 col-sm-offset-0 col-xs-8 col-xs-offset-2 mb-30">
						<img alt="1" src="<?php echo $noi_dung_tin_tuc['anh'] ? 'img/'.$noi_dung_tin_tuc['anh'] : 'img/img_trong.jpg' ;?>" class="item-container">                            
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 text-center">
						<h2 class="h3"><?php echo $nganh_dao_tao['ten_nganh_dt'];?> </h2>
						<p><strong>Chi tiết tin tức</strong></p>
						<div class="page-breadcrumb">
							<a href="index.php">Trang chủ</a>/<a href="danh_sach_tin_tuc.php">Tin tức</a>
						</div>
					</div>
                </div>
				</div>
            </div>
        </section>
        <div class="clearfix"></div>
            <div class="news-description"> 
                <div class="news-description__main">
                    <div>
                        <h3 class=" mtb-30 news__card-title"><?php echo $noi_dung_tin_tuc['tieu_de'];?></h3>
                    </div>	
                    <hr>
                    <?php
                     if($noi_dung_tin_tuc['video']!=NULL){
                         ;?>
                         <video  class="video" style="width: 80%; margin: auto;" id="player2" preload="auto"  controls="controls">
                         <!-- MP4 -->
                         <source type="video/mp4" src="media/<?php echo $noi_dung_tin_tuc['video'];?>" />
                        </video>
                        <?php
                     }
                     else{
                         ;?>
                        <img style="width: 80%; margin: auto;" src="<?php echo $noi_dung_tin_tuc['anh'] ? 'img/'.$noi_dung_tin_tuc['anh'] : 'img/img_trong.jpg' ;?>" alt="">
                        
                        <?php
                     }
                     ;?>  

                    <div class="spacer-60"></div>
                    <h5><?php echo $noi_dung_tin_tuc['mo_ta'];?></h5>
                    <p><?php echo $noi_dung_tin_tuc['noi_dung'];?></p>
                            
                </div>

                <div class="news__sub--s">
                    <div style="margin-left: 20px">
                        <h4>Tin nhiều người xem nhất</h4>
                        <hr>
                    </div>
                    <?php
                    include('config.php');
                    $sql2 = " select *
                            from tbl_tin_tuc
                            where tbl_tin_tuc.id_nganh_dt = '".$noi_dung_tin_tuc['id_nganh_dt']."'
                            and tbl_tin_tuc.id_tin_tuc != '".$noi_dung_tin_tuc['id_tin_tuc']."'
                                ";
                    $tin_tuc_sub = mysqli_query($ket_noi, $sql2);
                    while($row=mysqli_fetch_array($tin_tuc_sub)){
                        ;?>
                        <div class="news__sub">
                        <div class="mtb-30">
                            <div class="item-box col-md-4 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 mb-sm-30">
                            <img src="<?php echo $row['anh'] ? 'img/'.$row['anh'] : 'img/img_trong.jpg' ;?>" alt="">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <h6><a href="chi_tiet_tin_tuc.php?id=<?php echo $row['id_tin_tuc'];?>"> <?php echo $row['tieu_de'];?></a></h6>
                            </div>
                        </div>	
                    </div>
                    <?php
                    }
                    ;?>
                </div>		   									                                                        
            </div> 
            <hr>
                <!-- Comments -->
                
                <?php
                    include('./format/form_comment.php')
                ;?>

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
