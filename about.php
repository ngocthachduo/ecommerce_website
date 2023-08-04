<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Tại Sao Lại Chọn Chúng Tôi?</h3>
         <p>
         Nếu bạn đang tìm kiếm một trang web bán hàng hiệu secondhand uy tín, chất lượng và giá cả hợp lý, thì bạn đã đến đúng nơi. Chúng tôi là một trang web chuyên cung cấp các sản phẩm thời trang cao cấp đã qua sử dụng, nhưng vẫn còn mới và đẹp. Bạn có thể tìm thấy các thương hiệu nổi tiếng như Gucci, Chanel, Louis Vuitton, Prada, Dior và nhiều hơn nữa. 2H đảm bảo về chất lượng của sản phẩm, vì chúng tôi luôn kiểm tra kỹ lưỡng trước khi đăng bán. Mua ngay thôi nào!!! </p>
         <a href="contact.php" class="btn">Liên Hệ</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">nhận xét của khách hàng</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic_1.png" alt="">
         <p>Tôi rất hài lòng với sản phẩm mà tôi đã mua từ trang web của bạn. Sản phẩm đúng như mô tả, chất lượng tốt và giao hàng nhanh chóng. Tôi sẽ giới thiệu trang web của bạn cho bạn bè và người thân của tôi. Một like cho đội ngũ tuyệt vời, trang web thực sự uy tín kèm theo tốc độ xử lí nhanh.
      </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ngọc Hà</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic_2.png" alt="">
         <p>Cảm ơn bạn đã cung cấp một dịch vụ khách hàng tuyệt vời. Bạn đã trả lời các câu hỏi của tôi một cách rõ ràng và thân thiện. Bạn cũng đã giải quyết vấn đề của tôi một cách nhanh chóng và hiệu quả. Tôi rất hài lòng với trải nghiệm mua hàng của tôi trên trang web của bạn.
</p><div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Anh Khoa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic_3.png" alt="">
         <p>Trang web của bạn có nhiều sản phẩm thời trang đẹp mắt và độc đáo. Tôi đã tìm thấy một chiếc túi xách Chanel mà tôi đã mơ ước từ lâu với một giá cả phải chăng. Tôi cảm thấy rất vui khi nhận được sản phẩm và nhận được nhiều lời khen từ mọi người.
</p><div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khánh Ngọc</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic_4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nguyên Hà</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic_5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Anh Thư</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bích Ngọc</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>