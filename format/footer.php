<footer class="footer pt-60">
    <div class="container">
        <!--Footer Info -->
        <div class="row footer-info mb-30">
            <div class="col-md-6 col-sm-12 col-xs-12 mb-sm-30 text-sm-left mtb-30">
                <p class="mb-xs-0">Hãy cùng nhau tạo nên thời đại của chúng ta! 
                    <br> Trước khi làm được việc đó, chúng ta phải định hướng tương lai một cách rõ ràng. 
                    <br> Và chúng tôi ở đây là để sinh viên giúp sinh viên
                </p>
                <?php
                $sql="select * from tbl_truy_cap
                        ";
                $truycap=mysqli_query($ket_noi, $sql);
                $TT=mysqli_fetch_array($truycap);
                ;?>
                <h6>Lượt truy cập: <?php echo $TT['luot_truy_cap'];?> </h6>
                
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 text-right text-sm-left">
                <ul class="link">
                    <li> <h4><a href="lien_he.php">Liên hệ</a></h4></li>
                </ul>
                <div class="spacer-30"></div>
                <ul class="social">
                    <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <div class="spacer-30"></div>
                <ul class="link-small">
                    <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>tienlv2001@gmail.com</a></li>
                    <div class="spacer-15"></div>
                    <li><a><i class="fa fa-phone left"></i>+84 334881421</a></li>
                </ul>
            </div>
        </div>
        <!-- End Footer Info -->
    </div>
    <hr />
    <!-- Copyright Bar -->
    <section class="copyright ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left text-sm-left"></div>
                <div class="col-sm-6 text-right text-sm-left">Website  by <a target="_blank" href="http://mis.hvnh.edu.vn/"><b>Sinh viên khoa Hệ thống thông tin quản lý</b></a></div>
            </div>
        </div>
    </section>
    <!-- End Copyright Bar -->
</footer>

<a class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
</a>