


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

	$sqlUsers = "select count(*) as count from userlist where event_id = " ;
	$sqlUsers = $sqlUsers . $_POST['event_id'];
	$countresult = $conn->query($sql);
	$sql = "INSERT INTO userlist(email_id, event_id, status) VALUES ( \"";
	$sql = $sql . $_POST['email_id'] . "\", " . $_POST['event_id'] . ", ";
	if($countresult['count'] < $_POST['count']){
		$sql = $sql . "1 )";
		$_SESSION['joinEventMessage'] = "added";
		echo "<script>console.log( 'Debug Objects: " . $sql . "' );</script>";		
	}else{
		$sql = $sql . "0 )";	
		$_SESSION['joinEventMessage'] = "waiting";
	}


	$result = $conn->query($sql);
	$conn->close();
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/php/event_page.html?event_id=".$_POST['event_id']."\"";
	echo "</script>";

?>