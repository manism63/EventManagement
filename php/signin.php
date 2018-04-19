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

// $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

$sql = "Select email_id, first_name, last_name, password, phone_number, user_type from 	user where email_id = '" .  $_POST['email'] . "'" ;



echo $sql . "<br>";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
	echo '[' . $row['password'] . ']' . "<br>";
	echo $_POST['pwd'] . "<br>";
	
	// $pwd = substr($row['password'],0,60);
	$pwd = md5($_POST["pwd"]);
	// if(password_verify($pwd, $row['password'])) {
	if($pwd == $row['password']){
		echo "id: " . $row["email_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		session_start();
		$_SESSION['emai_id'] = $row["email_id"];
		$_SESSION['first_name'] = $row["first_name"];
		$_SESSION['last_name'] = $row["last_name"];
		
		echo "<script type=\"text/javascript\">";
		echo "window.location = \"http://localhost/EventManagement/html/all_events.html\"";
		echo "</script>";	
	} else{
		
		echo "<h1> password not correct </h1>";
		echo "<script type=\"text/javascript\">";
		echo "window.location = \"http://localhost/EventManagement/html/login.html?status=1\"";
		echo "</script>";
	}

} else {
    echo  "<br>" . "0 results";
}

$conn->close();
?>