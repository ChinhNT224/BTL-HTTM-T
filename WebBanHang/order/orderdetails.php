<?php
session_start();
include('../database/dbcon.php');
include '../header_footer/admin_header.php';
if (isset($_GET['ido'])) { 
$id = $_GET['ido'];
$tongtien = $_GET['cost'];
$slsp = $_GET['sl'];
$s = "SELECT * FROM `Order_Details` 
where OrderID = '$id'";
$sl = mysqli_query($con,$s);
$row = mysqli_fetch_array($sl);
$name = $row['CustomerName'];
$phone = $row['CustomerPhoneNo'];
$address = $row['CustomerAddress'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/gioHang.css">
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">

</head>
<body>
<div class = main><?php include '../header_footer/admin_toggle.php'; ?>
        <div class="content grid">
                <div class="content__up">
                    <div class="thongtindonhang">
                        <div class="hoten">Họ Và Tên: <?php echo $name?></div>
                        <div class="diachi">Địa Chỉ: <?php echo $address?></div>
                        <div class="sdt">Số điện Thoại: <?php echo $phone?></div>
                    </div>
                    <div class="h1">
                        <div class="t1">Sản phẩm</div>
                        <div class="t2">Tên sản phẩm</div>
                        <div class="t3">Số lượng</div>
                        <div class="t3">Thành tiền</div>
                    </div>
                    <div class="line"></div>
                    <?php
                        //initialise variable
                        //thực hiện query trong database
                        
                        $i = 1;
                        //retreat data from the previous query
                        $s = "SELECT * FROM `Order_Details` 
                        where OrderID = '$id'";
                        $sl = mysqli_query($con,$s); 
                        while ($row = mysqli_fetch_array($sl)) {
                            //check if the product is still available
                            //lấy id giày
                            $s1 = $row['ProductID'];
                            $products = "SELECT * FROM `Categories` 
                            where CategoryID = '$s1'";
                            $product1 = mysqli_query($con,$products); 
                            $product = mysqli_fetch_assoc($product1);
                        ?>
                    <div class="h1">  
                        <div class="c1">
                        <?php 
                            //create img path
                            $img =  "../images/".$product['ThumbnailImage'];
                        ?>
                        <!-- display img -->
                        <img src="<?php echo $img ?>">
                        </div>
                        <div class="c2"><?php 
                            //create img path
                            $name =  $product['CategoryName'];
                            echo $name
                        ?>
                         </div>
                        <div class="c3">
                        <?php 
                            //create img path
                            $productquantity =  $row['amount'];
                            echo $productquantity  
                        ?>
                        </div>
                        <div class="c3">
                        <?php
                            $price = $row['Cost']*$row['amount'];
                            echo $price; 
                        ?> 
                        </div>      
                        
                    </div>
                    <div class="line"></div>
                    <?php
                        }
                    ?>
                                
                </div>
            <div class="content__down">    
                <div class="line"></div>    
                <div class="row">
                    <div class="row-left">Tổng sản phẩm:</div>
                    <div class="row-right"><?php echo $slsp; ?></div>
                </div>
                <div class="row">
                    <div class="row-left">Tổng tiền:</div>
                    <div class="row-right"><?php echo $tongtien ?></div>
                </div>   
                <div class="line"></div>
                <a href="../admin_account/admin_homepage.php" style="font-size:20px;font-weight:bold;color: green;;">Quay Lại</a>  
            </div>
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