<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- file css link -->
    <link rel="stylesheet" href="css/style.css" /> 
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">Hieu Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <div class="heading" style="background: url(images/header-bg-3.png)">
        <h1>Đặt bây giờ</h1>
    </div>


    <!-- book start -->
    <!-- book end -->
     <section class="booking">
        <h1 class="heading-title">Đặt chuyến đi của bạn</h1>

        <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">  
                <span>tên: </span>
                <input type="text" placeholder="nhập họ tên của bạn" name="name">
            </div>

            <div class="inputBox">  
                <span>Email: </span>
                <input type="email" placeholder="nhập email của bạn" name="email">
            </div>

            <div class="inputBox">  
                <span>Số điện thoại: </span>
                <input type="text" placeholder="nhập số điện thoại của bạn" name="phone">
            </div>

            <div class="inputBox">  
                <span>Địa chỉ: </span>
                <input type="text" placeholder="nhập địa chỉ của bạn" name="address">
            </div>

            <div class="inputBox">  
                <span>Điểm đến: </span>
                <input type="text" placeholder="nhập điểm muốn đến của bạn" name="location">
            </div>

            <div class="inputBox">  
                <span>Số lượng hành khách: </span>
                <input type="text" placeholder="nhập số lượng hành khách của bạn" name="guests">
            </div>

            <div class="inputBox">  
                <span>Ngày khởi hành: </span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">  
                <span>Ngày rời đi: </span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">

        </form>
     </section>     

     
    <!-- footer start -->
     <section class="footer">
         <div class="box-container">

            <div class="box">
                <h3>Đường dẫn</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>


            <div class="box">
                <h3>Liên kết phụ</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Đặt câu hỏi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Về chúng tôi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Chính sách bảo mật</a>
                <a href="#"><i class="fas fa-angle-right"></i>Điều khoản sử dụng</a>
            </div>


            <div class="box">
                <h3>Thông tin liên lạc</h3>
                <a href="#"><i class="fas fa-phone"></i>0911-60-10-55</a>
                <a href="#"><i class="fas fa-phone"></i>02923-11-86-86</a>
                <a href="#"><i class="fas fa-envelope"></i>hieutravel@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Can Tho, Viet Nam</a>
            </div>
            
            <div class="box">
                <h3>Theo dõi chúng tôi</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>         
            
         </div>

         <div class="credit"> Created by <span>hieuTravel</span></div>

     </section>
    <!-- footer end -->    
     

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- file js -->
     <script src="js/script.js"></script>

</body>
</html>
