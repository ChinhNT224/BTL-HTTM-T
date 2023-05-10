<?php 
session_start ();
include('../database/dbcon.php');
include ('../header_footer/user_header.php');
if (isset($_SESSION['id'])) { 
$id = $_SESSION['id'];
$sumSP = 0;
$sumTien = 0;
?>

<html>
    <head>
        <title>Giỏ hàng</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/user.css?v=<?php echo time(); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <?php include '../header_footer/admin_toggle.php'; ?>
                <div class = "cart_box">  
                <div class="cart__up">
                <div class="cardHeader"><h2>Giỏ hàng</h2></div>
                    <div class="h1">
                        <div class="t1">Sản phẩm</div>
                        <div class="t2">Tên sản phẩm</div>
                        <div class="t3">Số lượng</div>
                        <div class="t3">Thành tiền</div>
                        <div class="t3">Xóa</div>
                    </div>
                    <div class="line"></div>
                        <?php
                        $i = 1;
                        $s = "SELECT * FROM `Cart` 
                        where AccountID = '$id'";

                        $Quantity = mysqli_query($con,$s); 
                        while ($row = mysqli_fetch_array($Quantity)) {
                            $s1 = $row['ProductID'];
                            $product = "SELECT * FROM `categories` 
                            where CategoryID = '$s1'";
                            $product1 = mysqli_query($con,$product); 
                            $product = mysqli_fetch_assoc($product1);
                        ?>
                    <div class="h1">  
                        <div class="c1">
                        <?php 
                            $img =  "../images/".$product['ThumbnailImage'];
                        ?>
                        <img src="<?php echo $img ?>">
                        </div>
                        <div class="c2"><?php 
                            $name =  $product['CategoryName'];
                            echo $name
                        ?>
                         </div>
                        <div class="c3">
                        <a href="../pay/removecart.php?id=<?php echo $id?>&cid=<?php echo $s1; ?>&value=<?php echo 0?>"  style="text-decoration: none;">
                            <button class="btn__buy-lable-small--btn">-</button>
                        </a>
                        <?php 
                            $ProductQuantity =  $row['ProductQuantity'];
                            echo $ProductQuantity
                        ?>
                        <a href="../pay/addcart.php?id=<?php echo $id?>&cid=<?php echo $s1; ?>&value=<?php echo 0?>"  style="text-decoration: none;">
                            <button class="btn__buy-lable-small--btn">+</button>
                        </a>
                        </div>
                        <div class="c3">
                        <?php
                            $produc = mysqli_query($con,"SELECT * FROM `product` 
                            where CategoryID = '$s1'");
                            $product = mysqli_fetch_array($produc);
                            $cost =  $product['Price'];
                            $ProductQuantity = $row['ProductQuantity'];
                            $price = $cost*$ProductQuantity;
                            echo $price; 
                            $sumSP += $ProductQuantity;
                            $sumTien += $price;
                        ?> 
                        </div>
                    <div class="c3">
                    <a href="../pay/delete.php?id=<?php echo $id?>&cid=<?php echo $s1; ?>">
                        <button type="button" id="delete" class="fa fa-trash-o" onclick='return checkdelete()'></button>
                    </a>
                    </div>        
                        
                    </div>
                    <div class="line"></div>
                    <?php
                        }
                    ?>
                </div>
            <div class="cart__down">
                <h1 class="content__down-name">Hóa đơn</h1>
                <div class="line"></div>       
                <div class="row">
                    <div class="row-left">Tổng sản phẩm:</div>
                    <div class="row-right"><?php echo $sumSP; ?></div>
                </div>
                <div class="row">
                    <div class="row-left">Tổng tiền:</div>
                    <div class="row-right"><?php echo $sumTien ?></div>
                </div>   
                <div class="line"></div>
                <a href="pay.php?id=<?php echo $id?>&&sp=<?php echo $sumSP ?>&&tien=<?php echo $sumTien?>">
                    <button type="button" id="delete" class="buy-btn">Thanh toán</button>
                </a>    
            </div>
        </div>    
    </body> 
</html>
<?php
}else{
     header("Location: ../user_account/login.php");
     exit();
}
 ?>