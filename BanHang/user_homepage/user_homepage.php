<?php
session_start();
if (isset($_SESSION['id'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HemDecor </title>

        <!-- font  cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://kit.fontawesome.com/1147679ae7.js" crossrigin="" anonymous></script>
        <link rel="stylesheet" href="../css/user.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <?php include '../header_footer/user_header.php'; ?>           
        <div class = "bg"><img src="../images/homepage/do-an-vat-han-quoc.jpg" class="background"></div>

        <div class="heading"> Sản phẩm </div>
        <section class = "product">
            <div class = "row">
                <div class = "column">
                    <a href = "../user_products/Đồ ăn.php"><img src = "../images/homepage/Đồ ăn.png" class ="cate" width = "400" height = "400"></a>
                    <div class = des>Đồ ăn</div>
                </div>
                <div class = "column">
                    <a href = "../user_products/Đồ uống.php"><img src = "../images/homepage/Đồ uống.png" class ="cate" width = "400" height = "400"></a>
                    <div class = des>Đồ uống</div>
                </div>
                <div class = "column">
                    <a href = "../user_products/Tráng miệng.php"><img src = "../images/homepage/Tráng_miệng-removebg-preview.png" class ="cate" width = "400" height = "400"></a>
                    <div class = des>Tráng miệng</div>
                </div>
            </div>        
        </section>  

        <div class="heading"> Sản phẩm bán chạy </div>
        <section class = "customer">
        <div class = "slider">
            <div class = "slide-track">
                <a href = "../đồ ăn/Cơm chiên hải sản.html">
                <div class = "slide">
                    <img src = '../images/Cơm chiên hải sản.jpg'>
                    <div class = "cus-name">Cơm chiên hải sản</div>
                </div></a>
                <a href = "../đồ ăn/Cơm chiên xúc xích.html">
                    <div class = "slide">
                        <img src = '../images/Cơm chiên xúc xích.jpg'>
                        <div class = "cus-name">Cơm chiên xúc xích</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm gà xối mỡ.html">
                    <div class = "slide">
                        <img src = '../images/Cơm gà xối mỡ.jpg'>
                        <div class = "cus-name">Cơm gà xối mỡ</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm thịt kho trứng.html">
                    <div class = "slide">
                        <img src = '../images/Cơm thịt kho trứng.jpg'>
                        <div class = "cus-name">Cơm thịt kho trứng</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm tấm thịt nướng.html">
                    <div class = "slide">
                        <img src = '../images/Cơm tấm thịt nướng.jpg'>
                        <div class = "cus-name">Cơm tấm thịt nướng</div>
                    </div></a>
                <a href = "../đồ uống/#">
                    <div class = "slide">
                        <img src = '../images/Coca Cola.jpg'>
                        <div class = "cus-name">Coca Cola</div>
                    </div></a>

                <!--DOUBLE-->

                <a href = "../đồ ăn/Cơm chiên hải sản.html">
                    <div class = "slide">
                        <img src = '../images/Cơm chiên hải sản.jpg'>
                        <div class = "cus-name">Cơm chiên hải sản</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm chiên xúc xích.html">
                    <div class = "slide">
                        <img src = '../images/Cơm chiên xúc xích.jpg'>
                        <div class = "cus-name">Cơm chiên xúc xích</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm gà xối mỡ.html">
                    <div class = "slide">
                        <img src = '../images/Cơm gà xối mỡ.jpg'>
                        <div class = "cus-name">Cơm gà xối mỡ</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm thịt kho trứng.html">
                    <div class = "slide">
                        <img src = '../images/Cơm thịt kho trứng.jpg'>
                        <div class = "cus-name">Cơm thịt kho trứng</div>
                    </div></a>
                <a href = "../đồ ăn/Cơm tấm thịt nướng.html">
                    <div class = "slide">
                        <img src = '../images/Cơm tấm thịt nướng.jpg'>
                        <div class = "cus-name">Cơm tấm thịt nướng</div>
                    </div></a>
                <a href = "../đồ uống/Coca Cola.html">
                    <div class = "slide">
                        <img src = '../images/Coca Cola.jpg'>
                        <div class = "cus-name">Coca Cola</div>
                    </div></a>
            </div>
        </div>
        </section>
        <div><?php include '../header_footer/user_footer.php'; ?></div>
    </body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>