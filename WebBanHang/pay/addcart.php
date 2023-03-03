<?php  
session_start();
include('../database/dbcon.php');
if (isset($_SESSION['id'])) {
     $id = $_GET['id'];
     $cid = $_GET['cid'];
     $val = $_GET['value'];
     $s = "SELECT * FROM `Cart` where AccountID = '$id' && ProductID = '$cid'";
     $get_products = mysqli_query($con,$s);
     $product = mysqli_fetch_array($get_products);
     if ($product['ProductQuantity']==NULL){
         $insert_product = mysqli_query($con, "INSERT INTO `Cart`(`AccountID`, `ProductID`, `ProductQuantity`) VALUES ('$id','$cid',1)");
     }else{
         $ProductQuantity1 = $product['ProductQuantity'];
         $ProductQuantity = $ProductQuantity1 + 1;
         $insert_product = mysqli_query($con, "UPDATE `Cart` SET `ProductQuantity`='$ProductQuantity' WHERE AccountID = '$id' && ProductID = '$cid'");
     }
     if ($insert_product&&$val==1) {
         echo "<script> alert('Thêm Thành Công')</script>";
         echo "<script>window.open('../user_orders/Cart.php?cid=$cid&&id=$id', '_self')</script>";
     }elseif($insert_product&&$val==0){
         echo "<script> alert('Thêm Thành Công')</script>";
         echo "<script>window.open('../user_products/view_product.php?cid=$cid&&id=$id?', '_self')</script>";
    }else{
        echo "<script> alert('Thêm Không Thành Công')</script>";
    }

}else{
    header("Location: ../user_homepage/user_homepage.php");
    exit();
}
?>