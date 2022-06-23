<?php session_start();
        include('./format/dem_truy_cap.php');
;?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Định hướng nghề nghiệp HVNH</title>
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
		<div id="fullpage">
		
        <!-- End Competitions Slider -->
        <!-- About Section -->
        <div id="about" class=" inner-intro section overlay-dark80 light-color pt-60 pt-sm-80 pb-sm-30" style="width: 100%; height:900px;">
            <div class="container text-left">
                <div class="row">
                    <div class="about-text col-md-7 mb-30" style="margin-top: 170px">
						<h3 class="padding-20 shadow" style="background-color:#8BC6CA;">Thực trạng định hướng nghề nghiệp</h3>
						<div class="padding-20 shadow" style="margin:-10px 0 0 15px;background: rgba(255,255,255,0.08);">
                            <p>Không thể phủ nhận, hướng nghiệp là bước đi quan trọng đầu tiên, giúp bạn nhanh chóng chạm tới thành công trong tương lai từ sự nghiệp cho đến cuộc sống đời thường.
                                Thế nhưng việc chọn đúng ngành, học đúng trường tưởng dễ mà lại khó.</p>
   
                           <p>Vậy thì tại trang web này sẽ là nơi tổng hợp những thông tin, yếu tố và cả những buổi chia sẻ để giúp các bạn có thể định hướng nghề nghiệp cho bản thân mình một cách rõ ràng hơn</p>
						<a href="gioi_thieu.php" class="btn btn-md btn-white">Tìm hiểu rõ hơn</a>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- End About Section -->
		
        
		<!-- To DO Section -->
        <div id="todo" class="section pt-sm-80 shadow bg-image dark-color" style="background: #fff url('img/desk.jpg') top left no-repeat; background-size:100% 100%; height:937px;">
            <div style="margin-top: 128px" class="container text-center">
            <form action="cong_viec_phu_hop.php" method="POST">
				<div class="col-md-7 col-md-offset-5">
                    <h3 class="text-left text-sm-white">Bạn thích công việc như thế nào?</h3>
                    <div class="spacer-15"></div>
                    <div class="Search-hobb">
                        <textarea name="txttimkiem" id="Search-hobb__input" cols="30" rows="10"></textarea>
                        <input class="Search-hobb__btn" type="submit" value="Tìm">
                    </div>
				</div>
            </form>
            </div>
        </div>
        <!-- End Todo Section -->

        <!-- End Events Section -->
        <!-- END CONTENT ---------------------------------------------------------------------------->

            <div id="sponsors" class="section bg-gray">
                <div  class="before_footer" style="height: 754px; background: #93301d url('img/back_trang_chu.jpg') left center no-repeat; background-size:100% auto;">
                    <div class="container text-left">
                        <div  style="margin-top: 128px;" class="col-sm-offset-0 col-xs-10 col-xs-offset-1 col-md-7 mb-sm-30">
                            <h3 class="float-left float-none-xs mb-60 mb-xs-15">Tin tức nổỉ bật</h3>
                            <a href="danh_sach_tin_tuc.php" style="text-align: center; margin-left: 45%; font-size: 16px; font-weight: 500" >XEM TẤT CẢ</a>
                            <div class="row">
                                <div class="owl-carousel item3-carousel nf-carousel-theme o-flow-hidden" style="width: 1200px">
                                <?php
                                include('config.php');
                                $sql = " select *
                                        from tbl_tin_tuc
                                        order by so_lan_xem DESC
                                        ";
                                $tin_tuc = mysqli_query($ket_noi, $sql);
                                while($row=mysqli_fetch_array($tin_tuc)){
                                ;?>
                                    <div class="item">
                                        <div class="nf-col-padding">
                                            <div class="item-box">
                                                <!-- Shop item images -->
                                                <div class="shop-item box-shadow">
                                                    <div class="item-img">
                                                    <img src="<?php echo $row['anh'] ? 'img/'.$row['anh'] : 'img/img_trong.jpg' ;?>" alt="">
                                                    </div>
                                                    <div class="item-mask">
                                                        <div class="item-mask-detail">
                                                            <div class="item-mask-detail-ele">
                                                                <h5 style="color: #fff"><?php echo $row['tieu_de'];?></h5>
                                                                <a href="chi_tiet_tin_tuc.php?id=<?php echo $row['id_tin_tuc'];?>" class="btn btn-line-xs btn-white-line">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Shop item images -->
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ;?>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <!-- FOOTER -->
                <?php
                include('./format/footer.php');
                ;?>
                <!-- END FOOTER -->
            </div>
		</div><!--end fullpage-->
    </div>


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="plugin/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="plugin/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <!-- End SLIDER REVOLUTION SCRIPTS  -->
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/revolution-slider.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>


</body>
</html>
