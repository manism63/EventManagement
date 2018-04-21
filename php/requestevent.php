<?php
// $servername = "149.160.213.45";
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
	$sql = "INSERT INTO request_event(email_id, request_desc) VALUES('" . $_SESSION['email_id'] . '\', \'' . $_POST['desc'] . '\')';

	echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    $_SESSION['reqMessage'] = 'Y';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    $_SESSION['reqMessage'] = 'N';
	}
		$conn->close();
		echo "<script type=\"text/javascript\">";
		echo "window.location = \"http://localhost/EventManagement/html/requestEvent.html\"";
		echo "</script>";
?>