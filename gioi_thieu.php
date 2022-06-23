<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
<meta charset="utf-8" />
    <title>Giới thiệu</title>
    <link class="icon_tittle" rel="shortcut icon" href="./assets/img/Logo.ico" type="image/x-icon" />
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
        <section class="inner-intro dark-bg overlay-dark ">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Giới thiệu</h2>
					<h6>Cốt lõi </h6>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a>/<span>Thông tin</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        
        <!-- About Section -->
        <section id="about" class="wow fadeIn ptb-80 ptb-sm-30">
            <div class="container">
                <div class="row text-center">
                    <div  class="col-md-12">
                        <h3>BẠN ĐANG LÀ SINH VIÊN ? BẠN CHƯA CÓ HƯỚNG ĐI CHO MÌNH SAU KHI RA TRƯỜNG? VẬY Đ Y LÀ WEBSITE DÀNH CHO BẠN</h3>
                        <div class="spacer-15"></div>
                        <p style="line-height: 1.5">Bằng khảo sát chúng mình thấy rằng, hiện nay, sinh viên vẫn chưa có định hướng rõ ràng cho bản thân của các bạn. Nhiều bạn đang là sinh viên năm 3 nhưng vẫn chưa có định hướng rõ ràng, thậm chí vẫn chưa biết là học ngành mình đang theo học sau này sẽ làm những công việc gì.</p>
						<p style="line-height: 1.5">Theo khảo sát của bộ phận tuyển sinh và định hướng nghề của các trường năm 2017, có đến 15 – 20% sinh viên sau khi tốt nghiệp mới biết bản thân chọn sai ngành. Có nhiều nguyên do khiến bạn lâm vào tình trạng trên như chưa hiểu rõ về mình, không nắm bắt được nhu cầu xã hội trong tương lai…</p>
                    </div>
                </div>
                <div class="row mt-80">
                    <!-- Welcome Content -->
                    <div class="col-md-6">
                        <h4>MỤC ĐÍCH</h4>
                        <div class="spacer-30"></div>
                        <p style="line-height: 2">Website này sẽ giúp cho các bạn sinh viên có một định hướng rõ ràng hơn, thay vì tìm hiểu mông lung về những gì mình đang học, những gì mình sẽ làm sau khi ra trường thông qua nhiều nguồn, bài đăng trên mạng thì web này sẽ tổng hợp một cách có chọn lọc về các hướng đi mà các bạn đã và đang tìm hiểu. Web sẽ có các thông tin về ngành nghề, một số buổi talkshow do trường và khoa tổ chức, thông tin tuyển dụng từ các doanh nghiệp đặc biệt là doanh nghiệp là đối tác của khoa mà các bạn đang học. Để bước đầu đến được với vị trí công việc mà bạn mong muốn thì bạn cần phải nắm được những kiến thức cơ bản, kiến thức chuyên môn nào? Hay bạn cần tập trung, nghiên cứu kỹ về môn học nào để phục vụ cho công việc của bạn? Chúng mình sẽ cùng tổng hợp lại qua những nguồn tin chọn lọc từ các thầy cô, doanh nghiệp và các cựu sinh viên</p>

                    </div>
                    <!-- End Welcome Content -->

                    <!-- Skills -->
                    <div class="col-md-6">
                        <h4>Kết quả khảo sát</h4>
                        <div class="spacer-30"></div>
                        <img src="./assets/img/KQKS.png" alt="">
                    </div>
                    <!-- End Skills -->
                </div>
            </div>
        </section>
        <!-- End CONTENT ------------------------------------------------------------------------------>

           <!-- FOOTER -->
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
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
</body>
</php>
