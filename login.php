<?php
    // Retrieve form data
    $number= $_POST['number'];
    $password = $_POST['password'];

    // Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'polaroid');

    // Query database for user with matching credentials
    $query = "SELECT * FROM register_user WHERE Mobile_number='$number' AND password='$password'";
    $result = mysqli_query($db, $query);

    // Check if user exists and credentials match
    if (mysqli_num_rows($result) == 1) {
        // Grant access
        session_start();
        $_SESSION['username'] = $username;
        echo '<script>alert("Successfulyy Logged In...")</script>';
        echo '<script type="text/javascript">
           window.location = "ourproducts.html"
         </script>';
    } else {
        // Deny access
        echo '<script>alert("Invalid user name or password")</script>';
        echo '<script type="text/javascript">
           window.location = "homepage.html"
         </script>';
    }
?>

