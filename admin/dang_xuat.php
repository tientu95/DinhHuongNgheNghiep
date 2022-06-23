<?php
session_start();
if(isset($_SESSION['da_dang_nhap']) && isset($_SESSION['da_dang_nhap'])!=NULL)
    unset($_SESSION['da_dang_nhap']);
    echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng xuất thành công');
                window.location.href='dang_nhap.php';
            </script>
        ";

;?>