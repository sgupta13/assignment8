<?php
$servername = "localhost";
$username = "sgupta13";
$password = "sgupta13";
$dbname="sgupta13";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from Album";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border = 1><tr><th>Title</th><th>Artist FName</th><th>Artist LName</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
   echo "<tr><td>".$row["albumt"]."</td><td>".$row["afname"]."</td><td>".$row["alname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "There are no entries available in the database";
}
$conn->close();
?> 
<html>
<head>
<title>Search Database</title>
<style>
body {
    background-color: Beige;
}
</head>
<body>
</body>
</html>