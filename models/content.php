<div class="content">
    <div class="left">
        <?php 
            include('models/left/danhsach.php');
        ?>
    </div>
    <div class="right">
        <?php 
            if(isset($_GET['xem'])) {
                $tam=$_GET['xem'];
            } else {
                $tam='';
            } if ($tam=='chitietloaisanpham') {
                include('models/right/chitietloaisanpham.php');
            } else if ($tam=='chitietsanpham') {
                include('models/right/chitietsanpham.php');
            } else {
                include('models/right/tatcasanpham.php');
            }
        ?>
    </div>
</div>
<div class="clear"></div>