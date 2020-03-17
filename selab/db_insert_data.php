<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "meeting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $name1= $_POST["username"];
// $email1= $_POST["email"];
// $hours1= $_POST["hours"];
// $date1= $_POST["meeting_date"];
// $from_time1 = $_POST["from_time"];
// $to_time1 = $_POST["to_time"];


$name1= "brijesh";
$email1= "cs17b031@iittp.ac.in";
$hours1= 2;
$date1= "1-1-2020";
$from_time1 ="2";
$to_time1 = "3";


	$sql = "INSERT INTO users (username,email,hours,meeting_date,from_time,to_time) VALUES ('$name1','$email1','$hours1','$date1','$from_time1','$to_time1')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


$conn->close();
?>
