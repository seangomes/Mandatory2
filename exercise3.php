<?php 

if (isset($_POST["submit"]))
{
	
		
		$checked = $_POST["myArray"];
		$price = 0;
		$total = 0;
			
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
				<h3>Exercise 3:</h3><br>
				
				<?php 
				echo "<h2>Selected:</h2> <br/> ";
				if(isset($checked))
				{
					for($i=0; $i < count($checked); $i++)
					{	
						echo  $checked[$i] . "<br/>";
						$total += $price + 10;
					}
					
					echo "<br/>";
					
					echo "Price: " . $total;
					
					echo "<br/>";
				}
				
				?>
				<br>
				<p>Where do you want to access to?</p>
				
				<form method="POST" action="<?php $_SERVER['PHP_SELF']?>" >
					<input type="checkbox" name="myArray[]" value="redbuildings">Red Buildings<br>
					<input type="checkbox" name="myArray[]" value="treehouse">Tree House<br>
					<input type="checkbox" name="myArray[]" value="fraternitycrib">FraternityCrib<br>
					<input type="checkbox" name="myArray[]" value="utilitybaracks">Utility Baracks<br>
					<input type="checkbox" name="myArray[]" value="oakcomplex">Oak Complex<br>
					
					<input type="submit" name="submit" value="Submit">
				
				
				
				</form>
			
				
				
			</section>
		</div>
		
		<?php include("footer.php") ?>		
	</div>

</body>

</html>