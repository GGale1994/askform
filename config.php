 <?php 
 		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "ask";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$database);
		mysqli_set_charset($conn,"utf8");
		?>
