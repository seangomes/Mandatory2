<?php 
session_start();

//tester om session er = loggedin
if(isset($_SESSION['user_name']))
{
	header('Location: loggedin.php');
}

//starter når submit knappen er aktiveret
if (isset($_POST["submit"]))
{
	$db = new mysqli("localhost", "878040_seangomes", "snubbigomes", "seangomes86_zzl_loginsys");
	
	//Tjekker connection!!
	if (mysqli_connect_errno())
	{
		printf("Connection failed: ", mysqli_connect_error());
		exit();
	}
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//henter fra min database
	$query = "SELECT * FROM users WHERE username=? AND password=?";
	$statement = $db->prepare($query);
	
	$statement->bind_param( "ss", $username, $password);	
	$statement->execute();
	$statement->bind_result($username, $password);
	
	//Looper igennem databasen og henter data ud!
	while ($statement->fetch())
	{
		$_SESSION["user_name"]=$username;
		header("Location: loggedin.php");
	}
	
	//lukker forbindelsen.
	mysqli_close($db);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css?v=1">  
<title>Web content</title>
</head>

<body>
	<div id="wrapper">
		
		<?php include ("header.php");?>
		
		<div id="content">
			<section id="left">
				<h1>Mandatory 2</h1><br>
				<h3>Exercise 6:</h3><br>
				
							
				<div id="loginbox">	
				
				<?php 
				if(isset($statement))
				{
					if ($statement != $_POST["username"] && $statement != $_POST["password"])
					{
						echo "Wrong Username or Password, try again!";
					}
				}
				?>
					<form method="POST" autocomplete="on" action="">
						<table cellspacing="0" cellpadding="0">
							<tr><th><p class="boxheading">Client Login</p></th></tr>
							<tr><td><p>Username:</p></td></tr>
							<tr><td><p><input type="email" name="username" required="required"></p></td></tr>
							<tr><td><p>Password:</p></td></tr>
							<tr><td><p><input type="password" name="password"></p></td></tr>
							<tr><td><p><input type="submit" name="submit" value="Login" class="button"></p></td></tr>
						</table>
					</form>
				</div>
			</section>		
		</div>
		
		<?php include("footer.php") ?>		
	</div>
</body>

</html>