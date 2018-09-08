<?php
session_start();
?>
<?php
$x=$_POST["username"];
$y=$_POST["pwd"];
$a=$_POST["emailid"];
$_SESSION["emailid"]=$a;
$b=$_POST["phoneno"];
if(isset($_POST["gender"]))
{
    $c=$_POST["gender"];
}
$d=$_POST["dob"];
if(isset($_POST["location"]))
{
    $e=$_POST["location"];
}
$check= getimagesize($_FILES["image"]["tmp_name"]);
    $imageloc=$_FILES["image"]["tmp_name"];
    $imagename=$_FILES["image"]["name"];
    $target="images/".$imagename;
    move_uploaded_file($imageloc, $target);

$conn=  mysqli_connect("localhost", "root", "sankeeth72", "test");
if(!$conn)
{
    die ("connection failed".  mysqli_connect_error()."".  mysqli_errno($conn));
}
$sql1="insert into test.account values('".$x."','".$a."','".$y."','$target')";
$sql2="insert into test.person values('".$a."','".$b."','".$c."','".$d."','".$e."') ";
//mysqli_query($conn, $sql1);
//mysqli_query($conn, $sql2);
if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2))
{
    
   header ("Location:mail.php");
    
}
else
{
    echo "error".  mysqli_error($conn);
}


