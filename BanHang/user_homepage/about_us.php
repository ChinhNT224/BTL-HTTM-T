<?php
session_start();
if (isset($_SESSION['id'])) { 
?>
<html>

<head>
    <title>Bộ Sưu Tập</title>
    <link rel="stylesheet" type="text/css" href="../css/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include '../header_footer/user_header.php'; ?>
    <div class="about-us">
        <div class="head1">Giới Thiệu</div>
        <div class="section-container">
            <div class="columns image" style="background-image:url('../images/Ngõ\ Ao\ Sen.jpg')"></div>
            <div class="columns content">
                <div class="content-container1">
                    <h4>Lạc trôi vào ngõ Ao Sen</h4>
                    <p>
                        Ao Sen (Phú Lãm, Hà Đông) là con ngõ quen thuộc và là nơi gửi gắm niềm đam mê ăn uống bất tận
                        của các thần dân Đại học Kiến Trúc, hay Học viện Bưu chính Viễn thông… Ngõ không lớn, nhưng lại
                        sở hữu vô vàn món ăn từ bình dân đến sang chảnh, đa dạng phong cách và hợp túi tiền sinh viên.
                    <p> Bằng cách đặt hàng quan web bạn có thể trải nghiệm thiên đường ẩm thực này.</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container">
                <div class="columns content">
                    <div class="content-container2">
                        <h4>Nền tảng</h4>
                        <p>
                            Website được phát triển để đảm bảo rằng bạn có trải nghiệm đặt hàng tốt nhất. Bạn có thể liên hệ với shop qua:
                        </p>
                        <ul>
                            <li> Facebook: <a href="https://www.facebook.com/trongchinh.nguyen.14661/" target="_blank" style="color: black;">Cơm bình dân </a></li>
                            <li>Hoặc ghé thăm cửa hàng tại:</li>
                            <b> 11B, ngõ 3 Ao Sen, Hà Đông.</b>
                        </ul>
                    </div>
                </div>
                <div class="columns image" style="background-image:url('../images/ngo1.jpg')"></div>
            </div>
            <div class="section-container">
            <div class="columns image" style="background-image:url('../images/Cơm thịt kho trứng.jpg')"></div>
            <div class="columns content">
               <div class="content-container1">
                  <h4>Về đồ ăn</h4>
                  <p>
                  Đồ ăn là một trong những điều quan trọng và hấp dẫn nhất của cuộc sống. Điều đó có thể là 
                  món ăn truyền thống nấu tại nhà hay các món mới lạ vừa được phát hiện ở nhà hàng và quán ăn. 
                  Việc ăn uống không chỉ cung cấp dinh dưỡng cho cơ thể mà còn mang lại sự thỏa mãn cho vị giác 
                  và khám phá cho tinh thần. Đến với chúng tôi:
                  </p>
                  <p> ✅ Luôn có ưu đãi giá tốt. </p>
                  <p> ✅ Đảm bảo nguyên liệu tươi, an toàn. </p>
                  <p> ✅ Nhiều món ăn đa dạng liên tục đổi mới.
                  </p>
               </div>
            </div>
         </div>
         <div class="section-container">
            <div class="columns content">
               <div class="content-container2">
                  <h4>Đồ uống</h4>
                  <p>
                  Đồ uống giải khát được xem như là một trong những yếu tố không thể thiếu của cuộc sống hiện đại. 
                  Chúng ta thường dành nhiều thời gian để thưởng thức những loại thức uống này, từ cà phê vào buổi sáng, trà chiều, đến rượu vang và cocktail vào buổi tối.
                  </p>
                  <p>
                  Những thức uống này không chỉ đơn thuần là để giảm căng thẳng hay bổ sung lượng nước cho cơ thể mà còn mang lại nhiều trải nghiệm thú vị. Với hàng loạt 
                  các loại thức uống phong phú và đa dạng, bạn có thể chọn lựa theo sở thích, tình cảm hoặc tùy theo mục đích sử dụng.
                  </p>
               </div>
            </div>
            <div class="columns image" style="background-image:url('../images/Trà dâu tằm.jpg')"></div>
         </div>
         <div class="section-container">
            <div class="columns image" style="background-image:url('../images/Bưởi.jpg')"></div>
            <div class="columns content">
               <div class="content-container1">
                  <h4>Hoa quả và tráng miệng</h4>
                  <p>
                  Hoa quả tự nhiên và tươi ngon luôn được xem là một sai lầm khổng lồ khi bỏ qua trong 
                  các món ăn của chúng ta. Chúng cung cấp các dưỡng chất thiết yếu cho cơ thể và có những hương vị tự nhiên tuyệt vời, giúp thêm niềm vui cho bữa ăn.
                  </p>
                  <p>
                  Những món tráng miệng mang lại trải nghiệm ngọt ngào, cân bằng sau bữa ăn đầy đủ chất dinh dưỡng. 
                  Bạn có thể thưởng thức các lựa chọn truyền thống như kem, bánh ngọt hay có thể tìm thấy các loại trái cây tươi mới và mix vào một số loại sữa chua, custard, pudding để tạo nên một món tráng miệng ngon miệng, tươi mới và đầy sức khỏe.
                  </p>
               </div>
            </div>
         </div>
      </div>
        <div><?php include '../header_footer/user_footer.php'; ?></div>
</body>

</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>