<?php 
    include('../config.php');
    $id=filter_input(INPUT_GET, 'id');
    $action=$_GET['action'];
 
    if(isset($_POST['them'])) {
        $tenloaisanpham=$_POST['tenloaisanpham'];
        $thutu=$_POST['thutu'];
        
        //them
        $sql="INSERT INTO loaisp (tenloaisanpham,thutu) VALUES ('$tenloaisanpham','$thutu')";
        mysqli_query($conn,$sql);
        header('location:../../admincp.php?quanly=quanlyloaisp&action=them');
    } else if ($action == 'edit') {
        
        if (isset($_POST['submit'])) {
            $tenloaisanpham=$_POST['tenloaisanpham'];
            $thutu=$_POST['thutu'];
            $sql="UPDATE loaisp SET tenloaisanpham='$tenloaisanpham', thutu=$thutu WHERE id_loaisp=$id";
            echo $sql;
            mysqli_query($conn, $sql);
        }
        
        $sql = "SELECT * FROM loaisp WHERE id_loaisp=$id";
        $run = mysqli_query($conn, $sql);
        $item= mysqli_fetch_array($run);
        print_r ($item);
        ?>
        
        <form action="?id=<?php echo $id; ?>&action=edit" method="POST" enctype="mutilpart/form-data">
            <table width="100%" border="1" align="center">
                <tr>
                    <td colspan="2">
                        <div align="center">Sửa loại sản phẩm</div>
                    </td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="tenloaisanpham" value="<?php echo $item['tenloaisanpham'] ?>"></td>
                </tr>
                <tr>
                    <td>thứ tự</td>
                    <td><input type="text" name="thutu" value="<?php echo $item['thutu'] ?>"></td>
                    <input name="submit" value="1" type="hidden">
                </tr>
                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="sua" id="sua" value="sửa">
                        </div>
                    </td>
                </tr>
            </table>
        </form>


        <?php

    } else if ($action == 'delete' ){
        //xoa
        $sql="DELETE FROM loaisp WHERE id_loaisp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../admincp.php?quanly=quanlyloaisp&action=them');
    }
?>