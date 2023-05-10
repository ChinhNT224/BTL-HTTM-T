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
        <style>
            .slide img {
                width: 200px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <?php include '../header_footer/user_header.php'; ?>           
        <div class="bg">
            <img src="../images/homepage/yellow-cute-geometric-background-image_2762240.png" class="background" style="height: 500px;">
        </div>
        <div class="heading"> Giới Thiệu </div>
      <section class = "about" id = "about">
         <div class = "container">
            <div class = "row align-items-center">
               <div class = "col=md-6 image">
                  <img src = "../images/intro.jpg" class = "intro_bg">
               </div>
               <div class = "col-md-6 content">
                  <p>Học viện Công nghệ thông tin - PTIT không chỉ là nơi cung cấp kiến thức chuyên môn cho 
                    sinh viên trong lĩnh vực Công nghệ thông tin, mà còn là một thế giới đa dạng về ẩm thực!
                     <br>Tại PTIT, bạn có thể tìm thấy những quán ăn ngon, ấm cúng để thưởng thức các món ăn 
                     truyền thống của Việt Nam và cả món ăn quốc tế được phục vụ bởi các nhà hàng, cửa hàng ăn uống tại khuôn viên trường. 
                  </p>
                  <p>Với sự đa dạng và phong phú của các món ăn, sinh viên có thể trải nghiệm vô vàn trải nghiệm ẩm thực độc đáo khi đến PTIT:
                     <br>- Những món ăn bữa chính.
                     <br>- Đồ uống, sinh tố giải khát.
                     <br>- Những món tráng miệng, hoa quả nhiệt đới.
                  </p>
                  <a href = "../anon/about_us.php" >
                     <div class = "more">Xem Tiếp</div>
                  </a>
               </div>
            </div>
         </div>
      </section>

        <div class="heading"> Sản phẩm </div>
        <section class = "product">
            <div class = "row">
                <div class = "column">
                    <a href = "../user_products/Đồ ăn.php"><img src = "../images/homepage/bibimbap.png" class ="cate" width = "400" height = "400"></a>
                    <div class = des>Đồ ăn</div>
                </div>
                <div class = "column">
                    <a href = "../user_products/Đồ uống.php"><img src = "../images/homepage/cola.png" class ="cate" width = "400" height = "400"></a>
                    <div class = des>Đồ uống</div>
                </div>
                <div class = "column">
                    <a href = "../user_products/Tráng miệng.php"><img src = "../images/homepage/salad.png" class ="cate" width = "400" height = "400"></a>
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