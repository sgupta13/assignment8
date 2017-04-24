<?php
   session_start();
   include("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $result = "SELECT uname FROM register WHERE uname = '$_POST[uname]' and password = '$_POST[password]'";
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($result != NULL) {
         header("location: home.html");
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo $error;
      }
   }
?>