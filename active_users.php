<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ranking</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="container">
	<table>
		<thead>
			<tr>
				<th>first name</th>
				<th>last name</th>
                                 <th>password</th>
				<th>email</th>
        <th>plan</th>
				<th>Balance</th>
				<th>referal bonus</th>
        <th>Reg. date</th>
        <th>Count</th>
				
			</tr>
		</thead>
		<tbody>
		<thead>
  <?php
    require('herokudb.php');
    $sql = "SELECT * FROM users" ;
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
             
            echo "<tr><td>" . htmlspecialchars($row['first_name']) . "</td><td>" . htmlspecialchars($row['last_name']) ."</td><td>" . htmlspecialchars($row['password']) ."</td><td>".
             htmlspecialchars($row['email']) . "</td><td>" . htmlspecialchars($row['plan']) . "</td><td>".       htmlspecialchars($row['balance']) . "</td><td>" . htmlspecialchars($row['ref_bal']) . "</td><td>".
             htmlspecialchars($row['date']) . "</td><td>" .  htmlspecialchars($row['count']) . "</td></tr> "; 
        }
    }
?>

	</tbody>
	</table>
</div>

  
</body>
</html>
