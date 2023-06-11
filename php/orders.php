<?php session_start();

include 'connect.php';

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


if($_POST['order'] === "place order") {
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $address = 'flat no. '. $_POST['flat'] .', '. $_POST['street'] .', '. $_POST['city'] .', '. $_POST['state'] .', '. $_POST['country'] .' - '. $_POST['pin_code'];
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   $query = "INSERT INTO orders (user_id, name, number, email, method, address, total_products, total_price) VALUES ('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$total_price')";


   mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../Picture/awan.png" class="icon" type="images" sizes="32x32">
   <title>orders</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

   <style>
      .box-container a {
         color: var(--red);
      }
      .box-container a:hover {
         text-decoration: underline;
      }
   </style>

</head>
<body>

<?php include 'headerAfterLogin.php'; ?>

<section class="orders">

   <h1 class="heading">PLACE ORDERS</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">Please login to see your orders. If you, already have an account? <a href="lg.php">login now</a></p>';
      }else{
         $selectRow = mysqli_query($conn, "select * from orders where user_id = '$user_id'");
         $select_orders = mysqli_fetch_assoc(mysqli_query($conn, "select * from orders where user_id = '$user_id'"));
         if(mysqli_num_rows($selectRow)> 0){
            {
   ?>
   <div class="box">
      <p>Placed on : <span><?= $select_orders['placed_on']; ?></span></p>
      <p>Name : <span><?= $select_orders['name']; ?></span></p>
      <p>Email : <span><?= $select_orders['email']; ?></span></p>
      <p>Number : <span><?= $select_orders['number']; ?></span></p>
      <p>Address : <span><?= $select_orders['address']; ?></span></p>
      <p>Payment method : <span><?= $select_orders['method']; ?></span></p>
      <p>Your orders : <span><?= $select_orders['total_products']; ?></span></p>
      <p>Total price : <span>Rp<?= $select_orders['total_price']; ?>.000</span></p>
      <p>Payment status : <span style="color:<?php if($select_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $select_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      }
   ?>

   </div>

</section>

</body>
</html>