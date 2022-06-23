<?php
        include('config.php');
        $sql_CN=" select *
                    from tbl_truy_cap
                    ";
        $truy_cap= mysqli_fetch_array(mysqli_query($ket_noi,$sql_CN));
        $_SESSION['truycap']= $truy_cap['luot_truy_cap'];
        if(isset($_SESSION['truycap']))
        $_SESSION['truycap']+=1;
        $sql_cap_nhat= " UPDATE `tbl_truy_cap` 
        SET `luot_truy_cap` = '".$_SESSION['truycap']."'
        WHERE `tbl_truy_cap`.`id` = '1' ";
        $cap_nhat_lan_xem = mysqli_query($ket_noi, $sql_cap_nhat);
;?>  