<?php 
    $conn = mysqli_connect("localhost","root", "", "webphpthuan");
    $sql="SELECT * FROM loaisp ORDER BY id_loaisp desc";
    $run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1px">

    <?php 
        if ($run){
            while($dong=mysqli_fetch_row($run)) {
                printf ("ID_loaisp: %s  |   Tên Loại SP: %s  | Thứ Tự: %s 
                </br>",$dong[0],$dong[1], $dong[2]);
            }    
        }
    ?>
    <tr>
        <td>Sửa</td>
        <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></td>
    </tr>
</table>