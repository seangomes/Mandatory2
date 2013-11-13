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
				<h3>Exercise 2:</h3><br>
				
				<?php 
				
				$array = array ("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", 										"Shanghai", "Lagos", "Buenos", "Aires", "Cairo", "London");
				
				$size = count($array) -1;
					
				echo "<h3>This is the unsorted list: </h3><p><br>";
				foreach($array as $key => $value)
				{
					if ($size == $key)
					{
						echo "{$value}. " ;
					}
					else
					{
						echo "{$value}, ";
					}
				}
				
				echo "</p><br>";
				
				
				echo "<h3>Now the sorted list! </h3><p><br>";
				sort($array);
					foreach($array as $key => $value)
					{
						if ($size == $key)
						{
							echo "{$value}. " ;
						}
						else
						{
							echo "{$value}, ";
						}
					}
					
					echo "</p><br>";
					
					echo "<h3> Unordered list: </h3><ul>";
					array_push($array, "Los Angeles", "Calcutta", "Osaka", "Beijing");
					
					sort($array);
					
					foreach($array as $value)
					{
						echo "<li>$value</li>";
					}
					echo "</ul>";
					
						
				?>
				
				
			</section>
		</div>
		
		<?php include("footer.php") ?>		
	</div>

</body>

</html>