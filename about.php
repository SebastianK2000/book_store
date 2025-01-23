<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p><a href="home.php">home</a> / about </p>
</div>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur distinctio dolor, earum eius est excepturi
                hic illo ipsam iste laborum, maiores nobis qui rem repellendus similique ut vitae voluptatem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>

<section class="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, at delectus dignissimos eum exercitationem facere iste maiores
                mollitia natus nihil nisi officiis porro quia quo quod tempore temporibus veritatis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

    </div>

</section>

<section class="authors">
    
    <h1 class="title">greate authors</h1>
    
    <div class="box-container">
        
        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>
        
    </div>
    
</section>

<?php include 'footer.php'; ?>

<!-- JS file -->
<script src="js/script.js"></script>

</body>
</html>
