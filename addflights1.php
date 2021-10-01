<?php
$x = $_POST["flightno"];
$y = $_POST["from"];
$z = $_POST["to"];
$b = $_POST["departtime"];
$c = $_POST["arrivaltime"];
$d = $_POST["depart"];
$e = $_POST["return"];
$f = $_POST["seats"];
$g = $_POST["fare"];
$conn =  mysqli_connect("localhost", "root", "sankeeth72", "test");
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
$query1 = "insert into test.flights values(" . $x . ",'" . $y . "','" . $z . "','" . $b . "','" . $c . "','" . $d . "','" . $e . "'," . $f . "," . $g . ")";
if (mysqli_query($conn, $query1)) {
    header("Location:admin.php");
} else {
    die("insert faled" . mysqli_error($conn));
}
