<?php
require("includes/common.php");
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if name and feedback are set and not empty
    if (isset($_POST['name']) && isset($_POST['feedback']) && !empty($_POST['name']) && !empty($_POST['feedback'])) {
        // Store the submitted feedback
        $name = $_POST['name'];
        $feedback = $_POST['feedback'];

        // You can save this feedback to a database or file or perform any other desired actions
        
        // For demonstration, we'll store the feedback in a session variable
        $_SESSION['feedback'][] = array('name' => $name, 'feedback' => $feedback);
    }
}
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

  <?php include 'includes/header_menu.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2>Feedback Form</h2>
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <h2>Feedbacks Received:</h2>
        <?php
        // Display submitted feedbacks
        if (isset($_SESSION['feedback']) && !empty($_SESSION['feedback'])) {
            foreach ($_SESSION['feedback'] as $feedback) {
                echo "<div class='border p-3 mb-3'>";
                echo "<h4>" . $feedback['name'] . "</h4>";
                echo "<p>" . $feedback['feedback'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No feedbacks yet.</p>";
        }
        ?>
      </div>
    </div>
  </div>

  <!--footer -->
  <?php include 'includes/footer.php' ?>
  <!--footer end-->
  <center><a href="feedback2.php">Best Feedback</a></center>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function() {
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

