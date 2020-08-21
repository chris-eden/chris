<?php
session_start();

$db = mysqli_connect('localhost','root','','rs');

if (isset($_POST['register_btn'])){
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	
	if($password == $password2){
		$password = md5($password);
		$sql = "INSERT INTO jj(username,email,password) VALUES('$username','$email','$password')";
	    mysql_query($db,$sql);
		
	
	}else{
		$_SESSION['message'] = "The two password do not match";
	}
}



?>


<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="post" action="index.php"> 
  <table>
     <tr>
	     <td>Username:</td>
		 <td><input type="text" name="username"></td>
	 </tr>
	 
	 <tr>
	     <td>Email:</td>
		 <td><input type="email" name="email"></td>
	 </tr>
	 
	 <tr>
	     <td>Password:</td>
		 <td><input type="password" name="password"></td>
	 </tr>
	 
	 <tr>
	     <td>Password2:</td>
		 <td><input type="password" name="password2"></td>
	 </tr>
	 
	 <tr>
	     <td></td>
		 <td><input type="submit" name="register_btn" value="Register"></td>
	 </tr>
  </table>
  </body>
</form>
</html>