<?php
// $servername = "149.160.213.45";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eventmanagement";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//echo "Connection failed";
	    die("Connection failed: " . $conn->connect_error);
	} 
	// echo "Connection successful";
	// $pwd = password_hash($_POST['pno'], PASSWORD_DEFAULT);
	$pwd = md5($_POST["pwd"]);
	// $pwd = substr($pwd, 0, 60);
	$sql = "INSERT INTO user(email_id, first_name, last_name, password, phone_number, user_type) VALUES('" . $_POST['email'] . '\', \'' . $_POST['fname'] . '\', \'' .  $_POST['lname']. '\', \'' . $pwd. '\', \'' . $_POST['pno'] . '\','. '\'u\'' . ')';

	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
		$conn->close();
		echo "<script type=\"text/javascript\">";
		echo "window.location = \"http://localhost/EventManagement/html/login.html\"";
		echo "</script>";
	} else {
	    //echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		echo "<script type=\"text/javascript\">";
		echo "window.location = \"http://localhost/EventManagement/html/signup.html?status=yes\"";
		echo "</script>";
	}
?>