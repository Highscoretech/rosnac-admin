<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">paid_into</th>
      <th scope="col">payment_ID</th>
      <th scope="col">selected_plan</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <?php
    require('config.php');
    $sql = "SELECT * FROM payment" ;
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['email']) . "</td><td>" . htmlspecialchars($row['paid_into']) ."</td><td>".
             htmlspecialchars($row['paymentid']) . "</td><td>" . htmlspecialchars($row['plan']) . "</td><td>".
             htmlspecialchars($row['date']) . "</td></tr> "; 
        }
    }
?>
<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>