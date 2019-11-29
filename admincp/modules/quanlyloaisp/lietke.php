<?php
$conn = mysqli_connect("localhost", "root", "", "webphpthuan");
$sql = "SELECT * FROM loaisp ORDER BY id_loaisp desc";
$run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1px">

    <thead>
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>TT</th>
            <th>Thao tác</th>
        </tr>
    </thead>

    <?php
    if ($run) {
        while ($item = mysqli_fetch_row($run)):
            ?>
            <tr>
                <td><?php echo $item[0]; ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td>
                    <a href="modules/quanlyloaisp/xuly.php?action=edit&id=<?php echo $item[0] ?>">Sửa</a>
                    <a href="modules/quanlyloaisp/xuly.php?action=delete&id=<?php echo $item[0] ?>">Xóa</a>
                </td>
            </tr>
    <?php
        endwhile;
    }
    ?>
</table>