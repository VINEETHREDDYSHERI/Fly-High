<?php
session_start();
?>
<?php
$x=$_POST["username"];
$a=$_SESSION["emailid"];
$b=$_POST["phoneno"];
$d=$_POST["dob"];
$e=$_POST["location"];
$check= getimagesize($_FILES["image"]["tmp_name"]);
$conn=  mysqli_connect("localhost", "root", "sankeeth72", "test");
if(!$conn)
{
     die ("connection failed".  mysqli_connect_error()."".  mysqli_errno($conn));
}
if($check!== false)
{
    $imageloc=$_FILES["image"]["tmp_name"];
    $imagename=$_FILES["image"]["name"];
    $target="images/".$imagename;
    move_uploaded_file($imageloc, $target);
    $sql1="update account set image='$target' where emailid='$a'";
    mysqli_query($conn, $sql1);
}
$sql2="update person set phno='$b' where emailid='$a'";
$sql3="update account set username='$x' where emailid='$a'";
$sql4="update person set dob='$d' where emailid='$a'";
$sql5="update person set location='$e' where emailid='$a'";
if(mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4) && mysqli_query($conn, $sql5))
{
    header ("Location:account.php");
}
else{
    echo 'error'.mysqli_error($conn);
}






