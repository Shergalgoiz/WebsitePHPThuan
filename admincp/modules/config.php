<?php 
    $servername='localhost';
    $username='root';
    $password='';
    $database='webphpthuan';    
    $conn=mysqli_connect($servername,$username,$password,$database) or die('không thể kết nối đến mysql');

    // mysqli_select_db($database,$conn);
?>