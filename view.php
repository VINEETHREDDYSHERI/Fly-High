<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
  <title>TODO supply a title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href="demo.css">
</head>

</html>
<?php

$dbHost     = 'localhost:3306';
$dbUsername = 'root';
$dbPassword = 'sankeeth72';
$dbName     = 'test';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$result = $db->query("SELECT image FROM account");

if ($result->num_rows > 0) {

  while ($imgData = $result->fetch_assoc()) {

    $s = $imgData['image'];
    //  header("content-type:image/jpg");
    echo '<div class="demo"><img src="data:image/jpg;base64,' . base64_encode($s) . '"width="100" height="200"></div>';
    /*$con=file_get_contents($s);
           $en=base64_encode($con);
           $mime='image/gif';
            $binary_data='data:'.$mime.';base64,'.$en ;*/
  }
} else {
  echo 'Image not found...';
}
?>