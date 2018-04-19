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
	echo "Connection failed";
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection successful";
$sql = "INSERT INTO event(event_header, event_desc, event_date, venue, no_people) VALUES('" . $_POST['eventName'] . '\', \'' . $_POST['desc'] . '\', \'' .  $_POST['date'] . ' ' . $_POST['time'] . ':00\', \'' . $_POST['venue'] . '\','. '\'' . $_POST['nopeople']. '\'' . ')';

echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>