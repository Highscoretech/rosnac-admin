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
      <th scope="col">ID</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">DOB</th>
      <th scope="col">sex</th>
      <th scope="col">phone</th>
      <th scope="col">country</th>
      <th scope="col">city</th>
      <th scope="col">facebook</th>
      <th scope="col">instagram</th>
      <th scope="col">twitter</th>
      <th scope="col">crypto</th>
      <th scope="col">wallect</th>
      <th scope="col">password</th>
      <th scope="col">plan</th>
      <th scope="col">balance</th>
      <th scope="col">ref_balance</th>
      <th scope="col">ref_code</th>
      <th scope="col">time</th>
    </tr>
  </thead>
  <?php
    require('config.php');
    $sql = "SELECT * FROM collage " ;
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['ID']) . "</td><td>" . htmlspecialchars($row['first_name']) ."</td><td>".
             htmlspecialchars($row['last_name']) . "</td><td>" . htmlspecialchars($row['email']) . "</td><td>".
             htmlspecialchars($row['DOB']) . "</td><td>" . htmlspecialchars($row['sex']) . "</td><td>".
             htmlspecialchars($row['phone']) . "</td><td>" . htmlspecialchars($row['country']) . "</td><td>".
             htmlspecialchars($row['city']) . "</td><td>" . htmlspecialchars($row['facebook']) . "</td><td>".
             htmlspecialchars($row['instagram']) . "</td><td>" . htmlspecialchars($row['twitter']) . "</td><td>".
             htmlspecialchars($row['crypto']) . "</td><td>" . htmlspecialchars($row['wallect']) . "</td><td>".
             htmlspecialchars($row['password']) . "</td><td>" . htmlspecialchars($row['confirm_plan']) . "</td><td>".
             htmlspecialchars($row['amount']) . "</td><td>" . htmlspecialchars($row['ref_amount']) . "</td><td>".
             htmlspecialchars($row['refer']) . "</td><td>" . htmlspecialchars($row['exaxtly']) . "</td></tr> "; 

        }
    }
        
?>
    


<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>