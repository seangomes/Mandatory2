<?php 

if (isset($_POST["submit"]))
{
	
	$db = new mysqli("localhost", "878040_seangomes", "snubbigomes", "seangomes86_zzl_loginsys");
	
	if (mysqli_connect_errno())
	{
		printf("Connection failed: ", mysqli_connect_error());
		exit();
	}
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	
	if (!preg_match('/[A-Z]+[a-z]+[0-9]+/', $password))
	{
		$texttouser = "Password must contain letters and numbers!";
	}
	else if (!strlen($password)>=4)
	{
		$texttouser = "Password have to be more than 4 chars long";
	}
	else
	{
		$query = "SELECT username FROM users WHERE username=?";
		$statement = $db->prepare($query);
		$statement->bind_param( "s", $username);
		$statement->execute();
	
		
		//$countrows = $statement->num_rows;
		
		if ($statement->fetch())
		{
			$texttouser = "That email is already been registered";
		}
		else 
		{
			$query = "INSERT INTO users SET username=?, password=?";
			$statement = $db->prepare($query);
			
			$statement->bind_param( "ss", $username, $password);
			//Den gŒr galt her
			$statement->execute();
			
			$texttouser = "Your are now created please login!";
		}
	}
	
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
				<h3>Exercise 7:</h3><br>
				
							
				<div id="loginbox">	
					<?php 
						if (isset($texttouser))
						{
						echo "<p>$texttouser</p>";							
						}
						
					
					?>
					
					<form method="POST" autocomplete="on" action="<?php $_SERVER['PHP_SELF']?>">
						<div id="title">Create user</div>
						<div class="row"><label class="col1">Email:&nbsp;&nbsp;</label>
						<span class="col2"><input name="username" required="required" class="input" type="email" id="name" size="15" tabindex="1" placeholder="Type email only" /></span>
						</div>
						<div class="row"><label class="col1">Password:&nbsp;&nbsp;</label>
						<span class="col2"><input name="password" class="input" type="password" id="email" size="15" tabindex="2" placeholder="Type your password" /></span>
						</div>
						<div align="center" class="submit"><input type="submit" name="submit" value="Create" width="52" height="19" border="0" class="button" />
						</div>
					</form>
				</div>
			</section>		
		</div>
		
		<?php include("footer.php") ?>		
	</div>
</body>

</html>