<?php
	session_start();
	session_unset(); 
	session_destroy(); 
	echo "<script type=\"text/javascript\">";
	echo "window.location = \"http://localhost/EventManagement/html/login.html\"";
	echo "</script>";
?>

