<div id="comments" class="comments">
                <form action="#" method="POST" class="form" enctype="multipart/form-data">
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
                    <input type="file" name="txtAnhMinhHoa" id="email" placeholder="Ảnh" class="form-control">
                    <div class="input-group textarea">
                        <!-- up ảnh -->
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
                        $sql = "INSERT INTO `tbl_comment` (`id_comment`,`id_tin_tuc`, `ten_nguoi_cmt`, `email_cmt`, `noi_dung_cmt`, `anh_cmt`, `ngay_cmt`)
                                VALUES (NULL,'".$id_tin_tuc."', '".$name."', '".$email."', '".$comment."', '".$anh_minh_hoa."', current_timestamp())";
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
                    
                    $sql = "SELECT * FROM tbl_comment where tbl_comment.id_tin_tuc = '".$id_tin_tuc."' ";
                    $result_comments = mysqli_query($ket_noi, $sql);
                    if (mysqli_num_rows($result_comments) > 0) {
                        while ($row = mysqli_fetch_array($result_comments)) {

                ?>
                    <div class="single-item">
                            <?php
                        if($row['anh_cmt']  != NULL)
                        {
                            ;?>
                            <a style="width: 20%; margin-right: 32px" class="cbox-gallary1" href="img/<?php echo $row['anh_cmt'];?>" title="Consequat massa quis">
                                <img style="width: 96%; margin-right: 32px" src="<?php echo $row['anh_cmt'] ? './img/'.$row['anh_cmt'] : 'img/' ;?>" alt="">
                            </a>
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
                            include 'config.php';
                        $sq=" SELECT * from tbl_rep_cmt where tbl_rep_cmt.id_comment = '".$row['id_comment']."'
                            ";
                        $RC = mysqli_query($ket_noi, $sq);
                        while($ND= mysqli_fetch_array($RC)){
                        ;?>
                            <div class="rep_cmt">
                                <?php
                                        if($ND['rep_anh']  != NULL)
                                        {
                                            ;?>
                                            <img style="width: 20%; margin-right: 32px" src="<?php echo $ND['rep_anh'] ? './img/'.$ND['rep_anh'] : 'img/' ;?>" alt="">
                                            <?php
                                        }
                                        ;?>
                                <div>
                                    <h4>ADMIN</h4>
                                    <p><?php echo $ND['noi_dung_rep'];?></p>
                                </div>        
                            </div>
                        <?php
                        }
                        ;?>
                    
                <?php

                    }
                }
                    
                ?>
                </div>
	        </div>