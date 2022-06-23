<?php
            $id_comment =$_GET['id'];
            include('../config.php');
            $comment = $_POST['txt_noidung']; // Get Comment from form
            
            $noi_se_luu_buc_anh_tren_website = "../img/".basename($_FILES["anh"]["name"]);
            $luu_file_anh_tam = $_FILES["anh"]["tmp_name"];

            // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
            $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);
            if(!$ket_qua_up_anh) {
                $anh_minh_hoa = NULL;
            } 
            else {
                $anh_minh_hoa = basename($_FILES["anh"]["name"]);
            }
            $sql = "INSERT INTO `tbl_rep_cmt` (`id_rep_cmt`, `id_comment`, `noi_dung_rep`, `rep_anh`, `ngay_rep`)
                    VALUES (NULL, '".$id_comment."', '".$comment."', '".$anh_minh_hoa."', current_timestamp())";
            $result_comment = mysqli_query($ket_noi, $sql);
            if ($result_comment) {
                echo "<script>
                        window.location.href='comment.php';
                        </script>
                        ";
            } else {
                echo "<script>
                        window.alert('Lỗi.');
                        window.location.href='comment.php';
                        </script>";
            }
        
    ?>