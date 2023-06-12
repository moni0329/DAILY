<?php
	$fname= $_POST['fname'];
        $lname= $_POST['lname'];
	$city = $_POST['city'];
        $number= $_POST['number'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','polaroid');
	if($conn->connect_error){
		echo "$conn->connect_error";
		echo '<script>alert("Error...")</script>';
	} else {
		$stmt = $conn->prepare("insert into register_user(f_name,l_name,city,mobile_number,password) values(?, ?, ?, ?,?)");
		$stmt->bind_param($fname, $lname,$city,$number,$password);
		$execval = $stmt->execute();
		echo '<script>alert("Registered...")</script>';
		header('location: login.html');
		$stmt->close();
		$conn->close();
		
		
	}
?>

