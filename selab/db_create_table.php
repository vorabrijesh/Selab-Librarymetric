<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "selab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//sql to create table

$sql1 = "CREATE TABLE countstars (
repo VARCHAR(100) NOT NULL,
stars VARCHAR(100) NOT NULL
)";

$sql2 = "CREATE TABLE ldso (
repo VARCHAR(100) NOT NULL,
creation_date VARCHAR(100) NOT NULL
)";

$sql3 = "CREATE TABLE lmd (
repo VARCHAR(100) NOT NULL,
mod_date date
)";

$sql4 = "CREATE TABLE forks (
repo VARCHAR(100) NOT NULL,
num_forks varchar(30) not null
)";
$sql5 = "CREATE TABLE soques (
repo VARCHAR(100) NOT NULL,
num_ques varchar(30)
)";

if ($conn->query($sql1) === TRUE)
	echo "Table countstars created successfully";
else 
{
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table ldso created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}

if ($conn->query($sql3) === TRUE) {
    echo "Table lmd created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}

if ($conn->query($sql4) === TRUE) {
    echo "Table forks created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}
if ($conn->query($sql5) === TRUE) {
    echo "Table soques created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}
$conn->close();
?>
