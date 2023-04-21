<?php
session_start();
include('../database/dbcon.php');
if (isset($_GET['sp'])) { 
$id = $_SESSION['id'];
$sumSP = $_GET['sp'];
$sumTien = $_GET['tien'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/gioHang.css">
</head>
<body>
<div class="content__down">
                <div class="line"></div>
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
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        <form action = "../pay/addorder.php?id=<?php echo $id?>&&sp=<?php echo $sumSP ?>&&tien=<?php echo $sumTien?>" method = "post">
            <div>
                <div class="Thanhtoan">
                    <h1 class="content__down-name">Điền thông tin</h1>
                    <input id="name" name="name" type="text" class="auth-form__input" placeholder="Nhập họ và tên người nhận">
                    <input id="phone" name="phone" type="text" class="auth-form__input" placeholder="Nhập số điện thoại">
                    <input id="address" name="address" type="text" class="auth-form__input" placeholder="Nhập địa chỉ nhận hàng">
                </div>
                <div>
                    <button id="btn___dn" onclick="checkValid()">Thanh Toán</button>
                </div>
            </div>      
        </form>    
     </div> 
        <script>
            function checkdelete() {
                return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
            }
        </script>
        </section>
</body>
</html>
<?php 
}else{
     header("Location: ../user_account/login.php");
     exit();
}
 ?>