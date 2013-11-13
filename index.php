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
				<h3>Exercise 2:</h3>
				<p>Use the following list of ten of the largest cities in the world. (Please note, 					these are not the ten largest, just a selection of ten from the largest cities.) 					Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, 				Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.
				Output these values to the browser separated by commas, using a loop to iterate over 				the array. Sort the array, then print the values to the browser in an unordered list, 				again using a loop. 
				(Unordered HTML list: city1 , city2..
				<p>Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort 				the array again, and print it once more to the browser, again in an unordered list.	
				</p><br>
				<h3>Exercise 3</h3>
				<p>Arrays are used to handle HTML checkbox forms. For example a user may apply for 					access to a number of different buildings.
				For this exercise, make a HTML checkbox form with these 5 buildings:
				Red Building, Tree House, Fraternity Crib, Utility Baracks, Oak Complex
				The form shoul be similar to this one:</p>
				<img src="images/opgavepicture.png" alt="opgavepicture" width="360" height="196">
				<p>When the user submits the form, the server should respond with the names of the 					chosen buildings. Access to each building costs 10$, so your script should also sum up 				the total price. As above, two buildings are selected which results in the price being 				20$.
				HTML checkbox form looks like this:</p>			
				<p><form method="post">
				<input type="checkbox" name="myform[]" value="some_value1">Displayed value1<br/>
				<input type="checkbox" name="myform[]" value="some_value2">Displayed value2<br/>
				...
				<input type="submit" name="submit"/>
				</form></p><br>
				<h3>Exercise 4</h3>
				<p>phptest exercises on Jons webpage</a></p><br>
				<h3>Exercise 5</h3>
				<p>phptest exercises on Jons webpage</a></p><br>
				<h3>Exercise 6 Login system</h3>
				<p>Make a Login system. It should be based a database and sessions.
				A user should be able to log in to a otherwise hidden page.
				If he enters wrong username or password, a message should be shown. But the message 				must not tell, which of the username or password were wrong. Only, that either one or 				both were wrong. This is for security reasons.
				If he enters correct username and password, a "secret" page should be shown. On this 				page, a Log-out link should be visible.
				If the user presses this link, he should be redirected to to start (public) page.
				</p><br>
				<h3>Exercise 7 Login system extended</h3>
				<p>Extend on the previous Login System.
				Now the user should be able to sign up by submitting and email address and password.
				Your system should not allow two users to register with the same email address.
				The password length should be minimum 5 characters, and consist of both numbers and 				letters.
				If a user tries to register with a too short password, your system should reply with a 				informative message. While doing this, the email address should still be visible in 				the form, so the user does not have to re-enter it.
				To check the email address format, it is sufficient to check if it contains a @ and a 				period (.)  Legal name@go.com   Illegal: nameATgo-com
				If the user successfully submits email and password, a reply should be displayed, 					saying  "Registration Successful".
				After a successful registration, the user should be presented with the login from the 				previous exercise.
				</p>

			</section>
		</div>
		
		<?php include("footer.php") ?>		
	</div>

</body>

</html>