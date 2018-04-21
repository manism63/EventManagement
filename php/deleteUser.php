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


	$sql = "delete from userlist where event_id = " . $_POST['event_id']  ;
	$sql = $sql . " and email_id= \"" . $_POST['email_id'] . "\"";
	$result = $conn->query($sql);
	
	echo "<script>console.log( 'Debug Objects: " . $sql . "' );</script>";
	
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/php/event_page.html?event_id=".$_POST['event_id']."\"";
	echo "</script>";

?>