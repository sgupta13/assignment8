<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "sgupta13";
$password = "sgupta13";
$dbname = "sgupta13";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to create Artist table
$sql = "CREATE TABLE Artist
    (
      afname varchar(15) NOT NULL,
      alname varchar(15) NOT NULL
    )";

// sql to create Album table
$sql2 = "CREATE TABLE Album
    (
      albumt  varchar(15) NOT NULL,
      afname varchar(15) NOT NULL,
      alname varchar(15) NOT NULL
	)";

if ($conn->query($sql) === TRUE) {
    echo "Table artists created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table albums created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>

</body>
</html>
