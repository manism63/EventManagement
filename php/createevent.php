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
	//echo "Connection failed";
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connection successful";
$sql = "INSERT INTO event(event_header, event_desc, event_date, venue, no_people) VALUES('" . $_POST['eventName'] . '\', \'' . $_POST['desc'] . '\', \'' .  $_POST['date'] . ' ' . $_POST['time'] . ':00\', \'' . $_POST['venue'] . '\','. '\'' . $_POST['nopeople']. '\'' . ')';

//echo $sql;
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	$_SESSION['createEventMessage'] = 'EventCreatedSuccessfully';

} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['createEventMessage'] = 'EventDidntCreate';	
}

$conn->close();
echo "<script type=\"text/javascript\">";
echo "window.location = \"http://localhost/EventManagement/html/createEvent.html\"";
echo "</script>";
?>