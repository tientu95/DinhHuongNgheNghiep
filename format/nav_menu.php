<header id="header" class="header shadow">
            <div class="header-inner">
            <div class="logo">
                    <a href="index.php">
                        <img src="./assets/img/logo.jpg" alt="">
                    </a>
                </div>
                <!-- Mobile Navbar Icon -->
                <div class="nav-mobile nav-bar-icon">
                    <span></span>
                </div>
                <!-- End Mobile Navbar Icon -->

                <!-- Navbar Navigation -->
                <div class="nav-menu">
                    <ul class="nav-menu-inner">
                        <li>
                            <a class="" href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a class="" href="gioi_thieu.php">Giới thiệu</a>                         
                        </li>
                        <li>
                            <a class="menu-has-sub">Định hướng <i class="fa fa-angle-down"></i></a>
							<!-- Dropdown -->
                            <ul class="sub-dropdown dropdown">
                                <?php
                                include("config.php");
                                $sql=" select * from tbl_nganh_dao_tao
                                        ";
                                $nganh_dt = mysqli_query($ket_noi,$sql);
                                $i=0;
                                while ($row = mysqli_fetch_array($nganh_dt)) {
                                    $i++;
                                ;?>
								<li>
                                    <a href="mo_ta_nganh.php?id=<?php echo $row['id_nganh_dt'] ;?>"><?php echo $row['ten_nganh_dt'] ;?></a>
                                </li>
                                <?php
                                }
                                ;?>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li> <a href="danh_sach_tin_tuc.php">Tin tức</a> </li>
                        <li> <a href="lien_he.php">Liên hệ</a>          </li>
                    </ul>
                </div>
                <!-- End Navbar Navigation -->

            </div>
        </header>