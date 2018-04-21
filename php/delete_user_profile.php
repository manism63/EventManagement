<?php
// $servername = "149.160.213.45";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagement";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "Connection failed";
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM user WHERE email_id='". $_SESSION['delete_user'] ."'";
$sql2 = "DELETE FROM userlist WHERE email_id='". $_SESSION['delete_user'] ."'";
$sql3 = "DELETE FROM request_event WHERE email_id='". $_SESSION['delete_user'] ."'";
$sql4 = "DELETE FROM comments WHERE email_id='". $_SESSION['delete_user'] ."'";
if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE) {
    echo "User deleated successfully";
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/html/userlist.html\"";
	echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/html/userlist.html\"";
	echo "</script>";
}


?>