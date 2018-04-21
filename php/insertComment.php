<?php

session_start();
// $servername = "149.160.213.45";
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

// if( ! array_key_exists($_POST, 'comment') ){
	// echo "comment variable not set"; 
	
// }

// if( ! array_key_exists($_POST, 'event_id')){
	// echo "event_id variable not set"; 
	
// }

$sql = "insert into comments (email_id, event_id, comment) VALUES ( \"" ;
$sql = $sql .  $_SESSION['email_id'] . "\",";
$sql = $sql .  $_POST['event_id'] ;
$sql = $sql .  ", \"" . $_POST['comment'] . "\")" ;  

echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/php/event_page.html?event_id=".$_POST['event_id']."\"";
	echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
	echo "<script type=\"text/javascript\">";
	
	echo "</script>";
}


?>