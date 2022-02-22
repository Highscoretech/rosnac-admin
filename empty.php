<?php
require('config.php');
    $paid = $_POST['paid_into'];  
    $plans= $_POST['plan'];
    $_SESSION['plan'] =  $_POST['plan'];
    $email= $_POST['email']; 
 
    $_SESSION['payment_ID'] = $paymentId;

$paymentid = strtoupper(bin2hex(random_bytes(4)));
// }

$sql = "INSERT INTO `payment`(`email`,`paid_into`, `paymentid`, `plan`, `date`) VALUES ('$email','$paid','$paymentid','$plans',now())";
mysqli_query($conn, $sql);
// Page on which the user will be
header('location: index.php');
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);




// Close connection
mysqli_close($conn);

?>