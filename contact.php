<?php
include 'config.php';
global $conn;
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}

$messages = array(); // Inicjalizacja tablicy komunikatów

if(isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg_content = mysqli_real_escape_string($conn, $_POST['message']);

    $stmt = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $stmt->bind_param("ssss", $name, $email, $number, $msg_content);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $messages[] = 'Message sent already!';
    } else {
        $stmt = $conn->prepare("INSERT INTO `message`(user_id, name, email, number, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $user_id, $name, $email, $number, $msg_content);

        if($stmt->execute()) {
            $messages[] = 'Message sent successfully!';
        } else {
            $messages[] = 'Failed to send message. Please try again.';
        }
    }
    $stmt->close();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>contact us</h3>
    <p><a href="home.php">home</a> / contact </p>
</div>

 <section class="contact">

     <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required placeholder="enter your name" class="box">
         <input type="email" name="email" required placeholder="enter your email" class="box">
         <input type="number" name="number" required placeholder="enter your number" class="box">
         <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
     </form>
     
 </section>

<?php include 'footer.php'; ?>

<!-- JS file -->
<script src="js/script.js"></script>

</body>
</html>
