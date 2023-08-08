<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
 <style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
  background-image: url("proback.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.error{
	color:red;
}
.container {
  max-width: 500px;
  margin: 100px auto;
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 30px;
}

h1 {
  text-align: center;
  margin-top: 0;
  color: #1c1c1c;
}

label {
  display: block;
  margin-bottom: 10px;
  color: #1c1c1c;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #1c1c1c;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

input[type="submit"]:hover {
  background-color: #333333;
}
</style>
</head>
<body>

 <?php


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$firstNameErr = $lastNameErr = $cityErr = $mobileErr = $passwordErr = "";

$firstName = $lastName = $city = $mobile = $password = "";

$a=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["firstName"])) {
	$firstNameErr = "First Name is required";
	$a=false;
	} else {
	$firstName = test_input($_POST["firstName"]);
	if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
		$firstNameErr = "Only letters and white space allowed";
		$a=false;
	}
	
	}
	if (empty($_POST["lastName"])) {
		$lastNameErr = "Last Name is required";
		$a=false;
	} else {
		$lastName = test_input($_POST["lastName"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
		$lastNameErr = "Only letters and white space allowed";
		$a=false;
		}
	}

	if (empty($_POST["city"])) {
		$cityErr = "Last Name is required";
		$a=false;
	} else {
		$city = test_input($_POST["city"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
		$cityErr = "Only letters and white space allowed";
		$a=false;
		}
	}
	
	

	if (empty($_POST["mobile"])) {
		$mobileErr = "Phone Number is required";
		$a=false;
	} else {
		$mobile = test_input($_POST["mobile"]);
		if (!preg_match('/^[0-9]*$/', $mobile)) {
			$mobileErr = "Invalid phone number";
			$a=false;
		}
	}
	
	
	if (empty($_POST["password"])) {
		$passwordErr = "Password is required";
		$a=false;
	} else {
	$password = test_input($_POST["password"]);
	}
	echo '<script type="text/javascript">
	window.location = "register.php#reg"
	</script>';
	


	if($a){

 


		$fname= $_POST['firstName'];
			$lname= $_POST['lastName'];
		$city = $_POST['city'];
			$number= $_POST['mobile'];
		$password = $_POST['password'];
	
		// Database connection
		$conn = new mysqli('localhost','root','','polaroid');
		if($conn->connect_error){
			echo "$conn->connect_error";
			echo '<script>alert("Error...")</script>';
		} else {
			$stmt = $conn->prepare("insert into register_user(f_name,l_name,city,mobile_number,password) values(?, ?, ?, ?,?)");
			$stmt->bind_param("sssss",$fname, $lname,$city,$number,$password);
			$execval = $stmt->execute();
			echo '<script>alert("Registered...")</script>';
			header('location: login.html');
			$stmt->close();
			$conn->close();
			
			
		}
	}
	
}

 
?>



  <div class="container" id="reg">
    <h1>Register to enter to Polaroid Paradise!</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="firstName">First Name</label>
      <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
      <span class="error"><?php echo $firstNameErr;?></span>

      <label for="lastName">Last Name</label>
      <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
      <span class="error"><?php echo $lastNameErr;?></span>

      <label for="city">City</label>
      <input type="text" id="city" name="city" placeholder="Enter your city" required>
      <span class="error"><?php echo $cityErr;?></span>

      <label for="mobile">Mobile Number</label>
      <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
      <span class="error"><?php echo $mobileErr;?></span>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Create a password" required>
      <span class="error"><?php echo $passwordErr;?></span>

      <input type="submit" value="Register">
    </form>
  </div>
  

</body>
</html>
