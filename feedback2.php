<?php


$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");


$query = new MongoDB\Driver\Query([]);


$cursor = $manager->executeQuery('Ecommerce.customer', $query); //  'NIBM17' is the database** 'customers' -- collection


$documents = $cursor->toArray();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    
    
    
    $document = new stdClass();
    $document->name = $name;
    $document->feedback = $feedback;
   
   
    
    
    $bulkWrite = new MongoDB\Driver\BulkWrite();
    $bulkWrite->insert($document);
    $manager->executeBulkWrite('Ecommerce.customer', $bulkWrite);
    
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>.<br><br>
    <title>Customer Feedback</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Customer Feedback</h2>

<table>
    <thead>
        <tr>
           <!-- <th>ID</th>  -->
            <th>Name</th>
            <th>Feedback</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach ($documents as $document): ?>
            <tr>
            <!--   <td><?php echo $document->_id->__toString(); ?></td>   -->
                <td><?php echo $document->name; ?></td>
                <td><?php echo $document->feedback; ?></td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<center>
<h2>Add New Feedback</h2></center>


         <center><form method="post">
    <label for="name">Your Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="feedback">Feedback:</label><br>
    <input type="feedback" id="feedback" name="feedback" required><br><br></center>

  

   

    <center>  <input type="submit" value="Submit"></center>

</form>

</body>
</html>


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





  <!--footer -->
  <?php include 'includes/footer.php' ?>
  <!--footer end-->
      <!--  <center><a href="feedback2.php">Best Feed Back</a></center>-->
</body>



</html>
