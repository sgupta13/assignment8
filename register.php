<html>
<head></head>
<?php
$sshName = "localhost";
$userName = "sgupta13";
$passWord = "sgupta13";
$dbName = "sgupta13";
$connect = mysqli_connect($sshName, $userName, $passWord, $dbName);
if(!$connect){
        die("Connection failed:" . mysqli_connect_error());
}
$sql = "INSERT INTO register
        VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]', '$_POST[uname]','$_POST[password]')";
if (mysqli_query($connect, $sql)){
        $last_id = mysql_insert_id($connect);
        echo "ID" . $last_id . "New user added successfully";
		header("location: signin.html");
} else {
        echo "Error: " . $sql . "<br>" . mysql_error($connect);
}
mysqli_close($connect);
?>
</html>