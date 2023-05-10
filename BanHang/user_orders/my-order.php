<?php 
session_start();
include('../database/dbcon.php');
include ('../header_footer/user_header.php');
?>
<html>

<head>
    <title>Bộ Sưu Tập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/user.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        table {
            counter-reset: row-number;
        }
        .row-number:before {
            counter-increment: row-number;
            content: counter(row-number);
        }
    </style>
</head>

<body>
    <div class="my-order_box">
        <div class="cardHeader">
            <h2>Đơn Của Tôi</h2>
        </div>
        <div class="border_bottom"></div>
        <table width = "100%">
                            <thead>
                                <tr> 
                                    <?php
			                            $s = "SELECT Count(*) AS ProductQuantity FROM `Product`";
			                            $result = mysqli_query($con, $s);
			                            $sp = mysqli_fetch_assoc($result);
			                            $result = mysqli_query($con, "SELECT Count(*) AS ProductQuantity FROM `Order`");
			                            $dh = mysqli_fetch_assoc($result);
		                            ?> 
                                    <th>Số thứ tự</th>                                                          
                                    <th>Mã Đơn</th>
                                    <th>Thời gian đặt hàng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <?php
                                $id = $_SESSION['id'];
                                $product = "SELECT o.*, od.OrderDate
                                FROM `Order` o
                                JOIN Order_Details od ON o.OrderID = od.OrderID
                                WHERE od.AccountID = '$id'
                                GROUP BY OrderID
                                ORDER BY od.OrderDate DESC;";
                                $all_products = mysqli_query($con,$product);
                                //retreat data from the previous query
                                while ($row = mysqli_fetch_array($all_products)) { 
                                $code = strtoupper($row['OrderID']);
                                ?>
                                <th class="row-number"></a></th>
                                <th><?php echo $code;?></a></th>
                                <th><?php echo $row['OrderDate'];?></a></th>
                                <th><?php echo $row['Cost'];?></a></th>
                            </tbody>
                            <?php } ?>
                        </table>
    </div>
    <footer><?php include '../header_footer/user_footer.php'; ?></footer>
</body>

</html>
