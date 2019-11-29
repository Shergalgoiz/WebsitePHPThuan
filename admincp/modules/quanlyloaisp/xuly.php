<?php 
    include('../config.php');
    $id=$_GET['id'];
    $tenloaisanpham=$_POST['tenloaisanpham'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])) {
        //them
        $sql="INSERT INTO loaisp (tenloaisanpham,thutu) VALUES ('$tenloaisanpham','$thutu')";
        mysqli_query($conn,$sql);
        header('location:../../admincp.php?quanly=quanlyloaisp&ac=them');
    } else if (isset($_POST['sua'])) {
        //sua
    } else {
        //xoa
        $sql="DELETE FROM loaisp WHERE id_loaisp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../admincp.php?quanly=quanlyloaisp&ac=them');
    }
?>