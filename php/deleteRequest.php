<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eventmanagement";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "Connection failed";
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connection successful";

	

	$sql = "delete from request_event where request_id = " . $_POST['request_id']  ;
	
	echo "<br>req" .$_POST['request_id'];
	

	$result = $conn->query($sql);

	
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/html/requesteventlist.html\"";
	echo "</script>";

?>