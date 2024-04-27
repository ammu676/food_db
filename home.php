<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <h3>A Premium</h3>
               <h3>And Authentic</h3>
               <h3>Steak House</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div>
         </div>
      </div>

   </div>

</section>
<section class="category">

<h3>
  <span>Welcome</span>
  <span>to Steak</span>
  <span>by the Bay</span>
</h3>


<h2>Our Delicious Story</h2>
    <p>Our journey started in 1985 when James, a steak lover,</p>
    <p> explored various recipes from across the world and</p>
    <p>brought them together in our menu. Ever since we are</p>
    <p>  now a team of 10 expert chefs from 3 top cities in India </p>
    <p>serving you the best steaks, desserts, and mocktails in </p>
       <p>town.</p>
   
       <div class="recom-btn">
         <a href="/recommendation.php" class="btn">Recommendation</a>
      </div>


<div class="category-image-container">
<div class="category-image-box"></div>
  <img src="/images/cate.jpg" class="category-image">
</div>

<section class="cate">
   <h1 class="title">Choose your Flavor</h1>
   <h2 class="">Food that brings people together!</h2>
   <div class="box1">
    <a href="/category.php?category=steaks" class="box1">
         <img src="/menu_img/steakbg.png" alt="Steaks">
    </a>
</div>

<div class="box2">
    <a href="/category.php?category=cocktails" class="box2">
         <img src="/menu_img/drinks.png" alt="Cocktails">
    </a>
</div>

<div class="box3">
    <a href="/category.php?category=desserts" class="box3">
        <img src="/menu_img/dessert-img.png" alt="Desserts">
    </a>
</div>


 </section>

    <div class="view-btn">
       <a href="menu.php" class="btn">see menus</a>
      </div>

</section>

<div class="background-image"></div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>



<?php include 'components/footer.php'; ?>



</script>

</body>
</html>










