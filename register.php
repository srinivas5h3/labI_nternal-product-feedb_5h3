<?php
	
	include 'connect.php';
	$usernm=$email="";
	$errors=array();
	if(isset($_POST['submit'])){
		$usernm=$_POST['username'];
		$email=$_POST['email'];
		$password1=$_POST['password'];
		
		if(count($errors)==0){
			$password=md5($password1);
			$sql="INSERT INTO `regg`( `username`, `password`, `email`) VALUES('$usernm', '$password', '$email')";
			$res=mysqli_query($db,$sql);
			header("location:login.php");
		}
		else{
			foreach ($errors as $err){
				echo "$err<br>";
			}
			
		}

	}	
?>

<!DOCTYPE html>

<html>

<head>

    <title>Product Review System</title>
    <link href="login.css" rel="stylesheet">
</head>
<html>
	<body>
		<div class="background">
        <br><br>
        <form class="middle">
            <label><b>Username:</b></label>
            <input type="text" name="username" placeholder="enter username">
            <br><br><labe><b>Email:</b></label>
            <input type="text" name="email"placeholder="enter email">
            <br><br>
            <label><b>Password:</b></label>
            <input type="password" name="password" placeholder="enter password">
            <br><br>
            <center>
			<input class="loginbutton" type="submit" name="register" value="Register">
            </center>
        </form>
    </div>
</body>

</html>
