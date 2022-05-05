
<?php

$servername= "localhost";
$dbuser= "root";
$password = "";

$dbname = "jhic";

$conn = mysqli_connect("$servername", "$dbuser", "$password", "$dbname");

if (!$conn) {
	echo "Connection failed!";
}
?>



