<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cafecito</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-md-5 mt-3">
                <h3 class="text-warning pt-3 title">Welcome to Our Urban Foods!</h3>
                <hr />
                <img src="images/urbanfoods.jpg" class="img-fluid d-block rounded mx-auto image-thumbnail" alt="Cafe Image">
                <p class="mt-2">Welcome to Urban Food, your go-to platform for a diverse range of high-quality, locally-sourced products. From fresh fruits and vegetables to delicious dairy products, baked goods, and handmade crafts, we have everything you need to enhance your daily life.</p>
                <p>Whether you're looking for a quick and healthy snack on the go or ingredients for your next culinary masterpiece, Urban Food has you covered. Our extensive selection includes organic produce, artisanal cheeses, freshly baked bread, and unique handmade items that add a special touch to any occasion.</p>
                <p>At Urban Food, we believe in supporting local farmers and artisans, ensuring that every product you purchase is not only fresh and delicious but also sustainable and ethically produced. Our platform is more than just a marketplace – it's a community hub where you can discover new flavors, connect with local producers, and find inspiration for your everyday needs.</p>
                <p>Join Urban Food today and explore our wide variety of products designed to satisfy all your cravings while supporting local businesses. Experience the best of what your community has to offer, all in one convenient place!</p>
            </div>
            <div class="col-md-5 mt-3">
                <span class="text-warning pt-3">
                    <h1 class="title">LIVE SUPPORT</h1>
                    <h3>24/7 Customer Service</h3>
                </span>
                <hr>
                <p>Have a question or need assistance? Our dedicated team is here to help you! Whether you want to inquire about our menu, book a reservation, or provide feedback, our live support is available 24 hours a day, 7 days a week, 365 days a year.</p>
                <p>We understand the importance of providing excellent customer service, and we're committed to ensuring your experience at Urban Food is nothing short of exceptional. From the moment you step through our doors, we want you to feel welcomed and valued.</p>
                <p>Don't hesitate to reach out to us with any inquiries or concerns. Your satisfaction is our top priority, and we're here to assist you every step of the way. Thank you for choosing Urban Food – where every food tells a story!</p>
            </div>
        </div>
    </div>
</div>

 <!--<div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>-->
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
