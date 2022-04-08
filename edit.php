<?php
require('herokudb.php');

if(isset($_POST['surbit'])){
    $email = $_POST['email'];
$plan = $_POST['plan'];
    $balance = $_POST['balance'];


$sql = "UPDATE users SET `balance`= '{$balance}' WHERE email = '{$email}'";
if ($result = mysqli_query($conn, $sql)) {
    echo 'sucessfully edited';
}

$sql = "UPDATE users SET `plan`= '{$plan}' WHERE email = '{$email}'";
if ($result = mysqli_query($conn, $sql)) {
    echo 'sucessfully edited';
}
// // Close connection
mysqli_close($conn);
}





?>
