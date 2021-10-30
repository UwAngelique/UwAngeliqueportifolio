<?php
session_start();
error_reporting(0);
  $server = "localhost";
  $user ="root";
  $pass ="";
  $db = "myportifolio";

  
  $conn = mysqli_connect($server, $user, $pass,$db);
  
  
  if($conn){
	  echo "Connected"."<br/>";
  }else{
	  echo "Not connected".mysqli_error($conn);
  }
?>