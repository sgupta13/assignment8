<?php
$sshName = "localhost";
$userName = "sgupta13";
$passWord = "sgupta13";
$dbName = "sgupta13";
$connect = mysqli_connect($sshName, $userName, $passWord, $dbName);

if(!$connect){
        die("Connection failed:" . mysqli_connect_error());
}
$sql = "INSERT INTO Album
        VALUES ('$_POST[albumt]','$_POST[afname]','$_POST[alname]')";
if (mysqli_query($connect, $sql)){
        $last_id = mysql_insert_id($connect);
        echo "ID" . $last_id . "New album added successfully";
} else {
        echo "Error: " . $sql . "<br>" . mysql_error($connect);
}
mysqli_close($connect);
?>


