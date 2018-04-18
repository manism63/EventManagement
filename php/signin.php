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
$sql = "Select email_id, first_name, last_name, password, phone_number, user_type from 	user where email_id = '" .  $_POST['email'] . "' and password = '" . $_POST['pwd'] . "'" ;


// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
    echo "id: " . $row["email_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
	session_start();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/html/all_events/\"";
	echo "</script>";
} else {
    echo "0 results";
}

$conn->close();
?>