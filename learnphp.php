<html>

	<head>
		<title>Information Gathered</title>
	</head>
	
	<body>
		
		
		
		<?php
		
			if (isset($_POST['submit'])){
				$usersName = $_POST['username'];
				$streetAddress = $_POST['streetaddress'];
				$cityAddress = $_POST['cityaddress'];
				
				echo '<p>Your Information</p>';
				
				// You can combine variables with text using a .
				
				echo $usersName. ' lives at </br>';
				echo $streetAddress. ' in </br>';
				echo $cityAddress. '</br></br>';
			}
			
		?>
		
	</body>
	
</html>