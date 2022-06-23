<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <title>Cơ hội nghề nghiệp</title>
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
        <?php
        include('config.php');
        $id_nganhdt = $_GET['idCN'];
            $sql1 = " select * from tbl_nganh_dao_tao 
                        where id_nganh_dt='".$id_nganhdt."'
                        ";
            $TT1= mysqli_fetch_array(mysqli_query($ket_noi, $sql1));
        ;?>
        <!-- End Header -->

        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- Intro Section -->
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
                <div class="row title">
                    <h2 class="h2"><?php echo $TT1['ten_nganh_dt'];?></h2>
					<p>Cơ hội việc làm </p>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a>/<a href="mo_ta_nganh.php?id=<?php echo $id_nganhdt;?>"><?php echo $TT1['ten_nganh_dt'];?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
		<!-- Sidemenu -->
					<section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
						<a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>
						<h5 class="white">Bộ lọc</h5>
						<div class="filter-form">
							 <!-- Filters FORM -->
                        <form class="filters-form" id="filters" role="form">
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-name" type="text" name="form-name" placeholder="Name">
							</div>
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-state" type="text" name="form-state" placeholder="State">
							</div>                                   
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-city" type="text" name="form-city" placeholder="City">
							</div>							
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-tags" type="text" name="form-tags" placeholder="Tags">
							</div>
							<div class="accordion mb-15">
                            <div class="accordion-section">
                                <h6 class="accordion-title white">Category</h6>
                                <div class="accordion-content">
                                    <div class="form-field-wrapper">
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Graphic Designer">Graphic Designer</span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Animators">Animator<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Creative Directors">Creative Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Webdev">Web Developers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Videographers">Videographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Coordinators">Coordinators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="CastingDirectors">Casting Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Actors">Actors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Dancers">Dancers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="ScriptWriter">Script Writer<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Beauticians">Beauticians<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="HairStylist">Hair Stylist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="FashionStylist">Fashion Stylist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Choreographers">Choreographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Curators">Curators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Magicians">Magicians<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Decorators">Decorators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Sound">Sound<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Promoters">Promoters/ Hostesses<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="VFXArtist">VFX Artist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Visualizers">Visualizers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="ContentWriters">Content Writers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Photographers">Photographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Models">Models<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Directors">Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Film Editors">Film Editors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Singers">Singers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Choreographers">Choreographers<span><br>
									</div>
								</div>
                            </div>
							</div>
							
                        <button class="btn btn-md btn-white form-full" type="submit" id="form-submit" name="submit">Filter</button>
                        </form>
                        <!-- END Filters	 FORM -->
						</div>
					</section>
					<!--End Sidemenu -->

        <!-- Options Section -->
        <section class="ptb-60 ptb-sm-30">
			<div class="tabs mt-15">
                <ul>
                    <?php
                     include('config.php');
                    $sql2 = " select * 
                            from tbl_chuyen_nganh 
                            where tbl_chuyen_nganh.id_nganh_dt = '".$id_nganhdt."'
                           
                            ";
                    $TT=mysqli_query($ket_noi, $sql2);
                    while($CN= mysqli_fetch_array($TT)){
                        ;?>

                        <li><a id="cv-tab" href="#tabs-<?php echo $CN['id_chuyen_nganh'];?>"><?php echo $CN['ten_chuyen_nganh'];?></a></li>
                    <?php
                    }

                    ;?>
                </ul>

                <div class="ui-tab-content">                        
                <!-- Competitions -->
                <?php
                $sql = " select * from tbl_chuyen_nganh where tbl_chuyen_nganh.id_nganh_dt= '".$id_nganhdt."'
                ";
                $TTCN = mysqli_query($ket_noi, $sql);
                while($CNN= mysqli_fetch_array($TTCN)){
                    ;?>
                    <div id="tabs-<?php echo $CNN['id_chuyen_nganh'];?>">
                        <div class="text-left">
                            <div class="list_job">
                                <div style=" flex: 3; text-align: justify;" class="mtb-30 mr-30">
                                    <p> <?php echo $CNN['mo_ta_cn'];?> </p>
                                </div>
                                <div style=" flex: 2;"class="mtb-30 ml-30" >
                                <?php
                                $sql3= " select * from tbl_nghe_nghiep
                                        where tbl_nghe_nghiep.id_chuyen_nganh = '".$CNN['id_chuyen_nganh']."'
                                        ";
                                        $NNS= mysqli_query($ket_noi, $sql3);
                                        while($NN= mysqli_fetch_array($NNS)){
                                        ;?>
                                            <div style=" flex: 2; display: flex; flex-direction: row;" class="mtb-30 ml-30 ">
                                                <div style="width: 80%" class="">
                                                    <a href="chi_tiet_cong_viec.php?id=<?php echo $NN['id_nghe_nghiep'];?>"> <img src="<?php echo $NN['anh_nghe'] ? 'img/'.$NN['anh_nghe'] : 'img/img_trong.jpg' ;?>" alt=""></a>                           
                                                </div>

                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <h6><?php echo $NN['ten_nghe_nghiep'];?></h6>
                                                    <a class="btn" href="chi_tiet_cong_viec.php?id=<?php echo $NN['id_nghe_nghiep'];?>">Chi tiết</a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }                
                ;?>
                    
                    
                    <!--end tab-->
                </div>
			</div>
            <!-- <div id="comments" class="comments">
                <form action="#" method="POST" class="form">
                    <div class="comments__info">
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text" name="txt_name" id="name" required placeholder="Nhập họ tên" required class="form-control">
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" name="txt_email" id="email"required placeholder="Nhập email" required class="form-control">
                        </div>
                    </div>
                    <div class="input-group textarea">
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="txt_comment"required placeholder="Nhập comment" required class="form-control"></textarea>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Comment</button>
                    </div>
                </form>
                <?php 

                    include 'config.php';

                    error_reporting(0); // For not showing any error

                    if (isset($_POST['submit'])) { // Check press or not Post Comment Button
                        $name = $_POST['txt_name']; // Get Name from form
                        $email = $_POST['txt_email']; // Get Email from form
                        $comment = $_POST['txt_comment']; // Get Comment from form

                        $noi_se_luu_buc_anh_tren_website = "./img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
                        $luu_file_anh_tam = $_FILES["txtAnhMinhHoa"]["tmp_name"];

                        // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
                        $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);
                        if(!$ket_qua_up_anh) {
                            $anh_minh_hoa = NULL;
                        } 
                        else {
                            $anh_minh_hoa = basename($_FILES["txtAnhMinhHoa"]["name"]);
                        }
                        $sql = "INSERT INTO `tbl_comment` (`id_comment`, `ten_nguoi_cmt`, `email_cmt`, `noi_dung_cmt`, `anh_cmt`, `ngay_cmt`)
                                VALUES (NULL, '".$name."', '".$email."', '".$comment."', '".$anh_minh_hoa."', current_timestamp())";
                        $result_comment = mysqli_query($ket_noi, $sql);
                        if ($result_comment) {
                            echo "<script>
                                    window.location.href='#comments';
                                    </script>
                                    ";
                        } else {
                            echo "<script>
                                    window.alert('Lỗi.');
                                    window.location.href='#comments';
                                    </script>";
                        }
                    }
                    ?>
                    <div class="prev-comments">
                    <?php 

                    $sql = "SELECT * FROM tbl_comment";
                    $result_comments = mysqli_query($ket_noi, $sql);
                    if (mysqli_num_rows($result_comments) > 0) {
                        while ($row = mysqli_fetch_array($result_comments)) {

                    ?>
                    <div class="single-item">
                            <?php
                        if($row['anh_cmt']  != NULL)
                        {
                            ;?>
                            <img style="width: 20%; margin-right: 32px" src="<?php echo $row['anh_cmt'] ? 'img/'.$row['anh_cmt'] : 'img/' ;?>" alt="">
                            <?php
                        }
                            ;?>
                        <div>
                            <h4><?php echo $row['ten_nguoi_cmt']; ?></h4>
                            <a href="mailto:<?php echo $row['email_cmt']; ?>"><?php echo $row['email_cmt']; ?></a>
                            <p><?php echo $row['noi_dung_cmt']; ?></p>
                        </div>
                    </div>

                    <?php

                        }
                    }

                    ?>
                </div>
	        </div>		 -->
        </section>
		
        <!-- End Options Section -->

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
