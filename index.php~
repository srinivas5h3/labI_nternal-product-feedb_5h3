<?php
include ('connect.php');
session_start();
		if (isset($_POST['Login'])) {
			$username = $_POST['username'];
			$password = $_POST['password1'];
			$qry = "SELECT * FROM user WHERE `username` = '$username' AND `password`='$password';";
			$sql = mysqli_query($conn,$qry);
				 	
				 		 if(mysqli_num_rows($sql)>0) {
    			    	    		$row=mysqli_fetch_assoc($sql);
    			    	    		$_SESSION['uid'] = $row['uid']; 
    			    	    		$_SESSION['username'] = $row['username'];
    			    	    		$_SESSION['password'] = $row['password'];    			    	 
									$_SESSION['success'] = "You are now logged in";
        			   		 		header('location:home.php');
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
        <button class="button"> <a href="register.php" >Register</a></button>
        <br><br>
        <form class="middle" >
            <label><b>Username:</b></label>
            <input type="text" name="username" placeholder="enter username">
            <br><br>
            <label><b>Password:</b></label>
            <input type="password" name="password" placeholder="enter password">
            <br><br>
            <center>
			<input class="loginbutton" type="submit" name="login" value="Login">
            </center>
        </form>
    </div>

</body>

</html>
