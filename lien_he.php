﻿<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <title>Liên hệ</title>
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
        <!-- Intro Section -->
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Liên hệ</h2>
					<p>Chúng tôi luôn sẵn sàng giải đáp các câu hỏi</p>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a>/<span>Liên hệ</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->

        <!-- Contact Section -->
        <section class="ptb-60 ptb-sm-30">
            <div class="container">
                <div class="row lien_he">
                    <div style="display: flex; flex-direction: column; justify-content: space-between">
                        <div class="">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6483747652455!2d105.82599151400444!3d21.006727626031477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac800f450807%3A0x419a49bcd94b693a!2zSOG7jWMgdmnhu4duIE5nw6JuIGjDoG5n!5e0!3m2!1svi!2s!4v1635406717941!5m2!1svi!2s" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="ptb-60">
                                <!-- Contact FORM -->
                                <!-- <form class="contact-form" id="contact"  method="POST" action="lien_he_luu.php"> -->
                                <form action="#" method="POST">


                                    <div class="form-field-wrapper">
                                        <input class="input-sm form-full" id="txthoten" type="text" name="txthoten" placeholder="Your Name" required>
                                    </div>

                                    <div class="form-field-wrapper">
                                        <input class="input-sm form-full" id="txtemail" type="email" name="txtemail" placeholder="Email" required>
                                    </div>

                                    <div class="form-field-wrapper">
                                        <input class="input-sm form-full" id="txtmota" type="text" name="txtmota" placeholder="Subject">
                                    </div>

                                    <div class="form-field-wrapper">
                                        <textarea class="form-full" id="txtnoidung" rows="7" name="txtnoidung" placeholder="Your Message" required></textarea>
                                    </div>

                                    <div  class="mt-4 mb-0">
                                                <input style="background-image: repeating-radial-gradient(0,#179EA1, #1a2936); color: #fff; font-weight: 500;"  type="submit" name="btnSubmit" value="Gửi">
                                            </div>
                                </form>
                                <?php 
                                    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                    include("./config.php");
                                    if(isset($_POST['btnSubmit'])){

                                        $ho_ten = $_POST['txthoten'];
                                        $mo_ta = $_POST['txtmota'];
                                        $email = $_POST['txtemail'];
                                        $noi_dung = $_POST['txtnoidung'];
    
                                        $sql = "
                                        INSERT INTO `tbl_lien_he` (`id_lien_he`, `ten_lien_he`, `email`, `tieu_de`,`noi_dung`,`ngay_gui`)
                                        VALUES (NULL, '".$ho_ten."', '".$email."','".$mo_ta."','".$noi_dung."',current_timestamp());
                                        ";
    
                                        // 2. Thực thi câu lệnh lấy dữ liệu mong muốn
                                        $nganh_dt = mysqli_query($ket_noi, $sql);
    
                                        // 3. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
                                        echo "
                                            <script type='text/javascript'>
                                                window.alert('Bạn đã gửi thành công');
                                                window.location.href='#';
                                            </script>
    
                                        ";
                                    }
                                    // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL

                                ;?>
                                <!-- END Contact FORM -->
                        </div>  
                    </div>
                    <div class="col-md-5 col-md-offset-1 contact">
                        <div class="contact-box-left mb-45">
                            <div class="contact-icon-left"><i class="ion ion-ios-location"></i></div>
                            <h6>Địa chỉ</h6>
							<div style="width: 67%" class="col-md-6">
                            <p>
                                Học Viện Ngân Hàng, Ngõ 12, Chùa Bộc, Đống Đa, Hà Nội
                            </p>
							</div>
							<div class="clearfix"></div>
                        </div>
						<div class="contact-box-left mb-45">
                            <div class="contact-icon-left"><i class="fa fa-envelope-o left"></i></div>
                                <a target="_blank" href="https://mail.google.com/mail/u/0/?fs=1&to=tienlv2001@gmail.com&tf=cm"><h6> tienlv2001@gmail.com</h6>   </a>       
                        </div>
                        <div class="contact-box-left mb-45">
                        <div class="contact-icon-left"><i class="fa fa-phone"></i></div>
                            <span>   09323637353</span>
                        </div>
                       
                        <div class="contact-box-left mb-45">

                            <h6>Theo dõi</h6>
                            <ul class="list-none social">
                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
                include('./format/footer.php');
                ;?>
        <!-- Contact Section -->

        <!-- End CONTENT ------------------------------------------------------------------------------>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
</body>
</php>