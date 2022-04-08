<?php
require("herokudb.php");
if (isset($_POST['login_use'])) {

	// Taking all 5 values from the form data(input)
	$verify = $_REQUEST['verify'];



    $sql = "UPDATE users SET `count`= '{$verify}'";
    if ($result = mysqli_query($conn, $sql)) {
        echo 'Task is updated';
    }
    
}