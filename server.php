
<?php

    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbname = "practice";
    $conn = mysqli_connect("localhost", "root", "", "practice");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    if (isset($_POST['Submit'])){
        $username = isset($_POST['user_name']);
        $email = isset($_POST['user_email']);
        $password = isset($_POST['password']);

            // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users VALUES ('$username',
        '$email', '$password')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$username\n $email\n $password");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

    }
    
    // Close connection
    mysqli_close($conn);
?>
