<?php
session_start();

//Logger ud og unsetter min session
if (isset($_POST["submit"]))
{
	unset($_SESSION['user_name']);
}

//Tjekker om session er sat og viser loggedin
if (isset($_SESSION["user_name"]))
{
	$loggedin = "<b>You are logged in </b><br>";
	
}
else
{
	header("Location: exercise6.php");
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
				<div id="loginbox">
				
					<?php echo $loggedin?>
					<form method="POST" autocomplete="on" action="<?php $_SERVER['PHP_SELF'] ?>">
						<input type="submit" name="submit" value="Logout">
					</form>
				</div>
			</section>		
		</div>
		
		<?php include("footer.php") ?>		
	</div>
</body>

</html>

