<?php
   session_start();
   session_unset(); // Xóa tất cả các biến phiên làm việc
   session_destroy(); // Xóa phiên làm việc
   header("Location: login.php");
   exit;
?>