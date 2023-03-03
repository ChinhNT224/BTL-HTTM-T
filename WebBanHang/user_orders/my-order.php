<?php 
session_start ();
include('../database/dbcon.php');
include ('../header_footer/user_header.php');
?>
<html>
    <head>
        <title>Bộ Sưu Tập</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/user.css?v=<?php echo time(); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class = "my-order_box">    
            <div class="cardHeader"><h2>Đơn Của Tôi</h2></div>
            <div class = "border_bottom"></div>
            <table width = "100%">
                <thead>
                    <tr>
                        <th>Mã Đơn</th>
                        <th>Trạng Thái Thanh Toán</th>
                        <th>Trạng Thái Thực Hiện</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <?php
                $id = $_SESSION['id'];
                $all_orders = mysqli_query($con, "SELECT * FROM `Cart` WHERE AccountID = '$id' ORDER BY OrderDate DESC");
                $i = 1;                
                while ($row = mysqli_fetch_assoc($all_orders)){
                    $_SESSION['accountID'] = $row['AccountID'];
                ?>
                <tbody>
                    <tr>
                        <th><a href = 'order-details.php'><?php echo $_SESSION['AccountID'];?></a></th>
                        <th><a href = 'order-details.php'><?php echo $row['ProductID'];?></a></th>
                        <th><a href = 'order-details.php'><?php echo $row['ProductQuantity'];?></a></th>
                        <th><a href = 'order-details.php'><?php echo $row['TotalOrder'];?></a></th>
                    </tr>
                </tbody>
                <?php $i++;} ?>
            </table>
        </div>
        <footer><?php include '../header_footer/user_footer.php'; ?></footer>
    </body>
</html>
