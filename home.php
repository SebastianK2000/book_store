<?php
include 'config.php';
global $conn;
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}

if(isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0) {
        $message = 'already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')")
            or die('query failed');
        $message = 'product added to cart!';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="home">

    <div class="content">
        <h3>Hand Picked Book to your door.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.php" class="white-btn">discover more</a>
    </div>

</section>

<section class="products" style="margin-top: 3rem">
    <style>
        .products .box img {
            width: 100%;
            max-width: 250px;
            height: 250px;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }
    </style>
    <h1 class="title" style="margin-bottom: 3rem">latest products</h1>

    <div class="box-container">

        <?php
        global $conn;
        $section_products = mysqli_query($conn, "SELECT * FROM products LIMIT 9") or die('query failed');
        if(mysqli_num_rows($section_products) > 0) {
            while($fetch_products = mysqli_fetch_assoc($section_products)) {
                $image_path = 'uploaded_img/' . $fetch_products['image'];
                if (file_exists($image_path) && !empty($fetch_products['image'])) {
                    $img_tag = '<img src="' . $image_path . '" alt="' . htmlspecialchars($fetch_products['name']) . '">';
                } else {
                    $img_tag = '<img src="uploaded_img/default_image.png" alt="default image">';
                }
                ?>
                <form style="min-height: 500px" action="" method="post" class="box">
                    <?php echo $img_tag; ?>
                    <div class="name"><?php echo htmlspecialchars($fetch_products['name']); ?></div>
                    <div class="price"><?php echo htmlspecialchars($fetch_products['price']); ?>/-</div>
                    <input type="number" min="1" name="product_quantity" value="1" class="qty">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($fetch_products['name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($fetch_products['price']); ?>">
                    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($fetch_products['image']); ?>">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <?php
            }
        }else{
            echo '<p class="empty">no products added yet!</p>';
        }
        ?>

    </div>
</section>

<div class="load-more" style="margin-top: 2rem; text-align: center">
    <a href="shop.php" class="option-btn">load more</a>
</div>

<section class="about" style="margin-bottom: 3rem; margin-top: 3rem">

    <div class="flex">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </div>

</section>

<section class="home-contact">

    <div class="content">
        <h3>have any questions?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="contact.php" class="white-btn">contact us</a>
    </div>

</section>

<?php include 'footer.php'; ?>

<!-- JS file -->
<script src="js/script.js"></script>

</body>
</html>
