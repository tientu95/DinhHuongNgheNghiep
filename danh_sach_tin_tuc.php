<?php session_start();

include('./format/dem_truy_cap.php');
;?>
<!DOCTYPE php>
<php>
<head>
<meta charset="utf-8" />
    <title>Tin tức</title>
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
                    <h2 class="h2">Tin tức</h2>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.php">Trang chủ</a>/<span>Tin tức</span>
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
        <section class="ptb-60 ptb-sm-60">
			<div  class=" tabs mt-15">
                <ul class="list_nganh">
                    <?php
                        include('config.php');
                        $sql= " select * 
                                from tbl_nganh_dao_tao
                                ";
                        $nganh_dt=mysqli_query($ket_noi,$sql);
                        while($row=mysqli_fetch_array($nganh_dt)){
                            ;?>
                            <li>
                                <a id="cv-tab" href="#tabs-<?php echo $row['id_nganh_dt'];?>"><?php echo $row['ten_nganh_dt'];?></a>
                            </li>

                    <?php
                        }
                    ;?>
                </ul>

                <div class="ui-tab-content">
                    <?php
                    include('config.php');
                    $sql= " select * 
                                from tbl_nganh_dao_tao
                                ";
                        $nganh_dt=mysqli_query($ket_noi,$sql);
                        while($row=mysqli_fetch_array($nganh_dt)){
                            ;?>
                    <div id="tabs-<?php echo $row['id_nganh_dt'];?>">

                            <div class="cards">
                                <?php
                                include('config.php');
                                $sql2=" select * 
                                        from tbl_tin_tuc 
                                        where tbl_tin_tuc.id_nganh_dt= '".$row['id_nganh_dt']."'
                                        order by id_tin_tuc desc 
                                        ";
                                $tin_tuc=mysqli_query($ket_noi, $sql2);
                                while($row1=mysqli_fetch_array($tin_tuc)){
                                    
                                ;?>
                                       
                                <div class="card">
                                <?php
                                    if($row1['video']!=NULL){
                                        ;?>
                                        <video  class="card-image" id="player2" preload="auto" poster="img/youtube.jpeg" controls="controls">
                                            <!-- MP4 -->
                                            <source type="video/mp4" src="media/<?php echo $row1['video'];?>" />

                                        </video>
                                    <?php
                                    }
                                    else{
                                    ;?>
                                       <a href="chi_tiet_tin_tuc.php?id=<?php echo $row1['id_tin_tuc'];?>"> <img src="<?php echo $row1['anh'] ? 'img/'.$row1['anh'] : 'img/img_trong.jpg' ;?>" alt=""  class="card-image"></a>
                                    <?php
                                    }
                                ;?>  
                                    <div class="card-content">
                                        <h4 class="card-title"><?php echo $row1['tieu_de'];?></h4>
                                        <div class="card-date_view">
                                            <h6><?php echo date("d/M/Y", strtotime($row1["ngay_dang"]));?> | <i class="fas fa-eye"></i> <?php echo $row1["so_lan_xem"];?> </h6> 
                                        </div>
                                        <div class="card--mo_ta">
                                            <p><?php echo $row1['mo_ta'];?></p>
                                        </div>
                                        <div class="card-bottom">
                                            <div class="card-detail">
                                                <a style="color: #fff;" href="chi_tiet_tin_tuc.php?id=<?php echo $row1['id_tin_tuc'];?>">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ;?>
                            </div> 
                    </div>
                    <?php
                            }
                    ;?>                            
                </div>
			</div>
								
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
                            