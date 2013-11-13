<?php 


if (isset($_POST["submit"]))
{
	$gamelist = $_POST["gameList"];
	$gameListAmount = $_POST["gameListAmount"];	
	$price = 450;
	
	$candylist = $_POST["candyList"];
	$candylistAmount = $_POST["candyListAmount"];
	$price2 = 20;
	
	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	
	$array1 = array($gamelist, $gameListAmount, $price);
	
	$array2 = array($candylist, $candylistAmount, $price2);
	
	$info = array($name, $address, $city);
	

	require 'PDF.php';
	$pdf = new PDF();
	
	$pdf->setInfomation($name, $address, $city);
	$pdf->setOrder($array1, $array2);
	$pdf->setBankInfo("asd");
	
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
				<h3>Webshop:</h3><br>
				
				<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">			
				<table>
				<tr>
					<th><p>PC Games</p></th>
					<th><p>Amount</p></th>
				</tr>
				<tr>
				<td>
					<select name = "gameList">
		               	<option value = "GTA V">GTA V</option>
		               	<option value = "Fifa 2014">FIFA 2014</option>
		               	<option value = "Battlefiend 4">Battlefield 4</option>
		               	<option value = "Counter strike">Counter Strike</option>   	
	             	</select>
	             </td>	
	             	
	             	<td>
	             		<input type="text" name="gameListAmount" placeholder="Type amount" size="10">
	             	</td>
	             </tr>
	            
	            	<tr>
	            		<th><p>Candy</p></th>
	            		<th><p>Amount</p></th>
	            	</tr>
	            	<tr>
	            	<td>
					<select name = "candyList">
		               	<option value = "Sneakers">Sneakers</option>
		               	<option value = "Mars">Mars</option>
		               	<option value = "Kitkat">Kitkat</option>
	             	</select>
	             	</td>
	             	
	             	<td>
	             		<input type="text" name="candyListAmount" placeholder="Type amount" size="10">
	             	</td>
	             	
	             	<tr>
	             		<td>
	             			<p>Name:</p><input type="text" name="name" placeholder="Type your Name">
	             		</td>
	             	</tr>
	             	<tr>
	             		<td>
	             			<p>Address:</p><input type="text" name="address" placeholder="Type your Address">
	             		</td>
	             	</tr>
	             	<tr>
	             		<td>
	             			<p>City:</p><input type="text" name="city" placeholder="Type your City">
	             		</td>
	             	</tr>
	             	
	             	<tr>
	             	<td>
	             		<input type="submit" name="submit" value="Order">
	             	</td>
	             	</tr>
             	</table>
             	</form>
			</section>		
		</div>
		
		<?php include("footer.php") ?>		
	</div>
</body>

</html>