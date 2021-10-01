<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$user = $_SESSION["username"];
$emailid = $_SESSION["emailid"];
$pwd = $_SESSION["pwd"];
?>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="account.css">
    <script src="script1.js"></script>
    <script>
        function f1() {
            document.getElementById("dob").type = "date";
        }

        function f2() {
            var ab = document.getElementById("pwd").value;
            if (ab == "<?php echo $pwd ?>") {
                return true;
            } else {
                alert("invalid password");
                return false;

            }

        }
    </script>
</head>

<body>
    <nav>
        <img src="C.png" class="logo" alt="logo">
        <ul>
            <li><a href="user.php" onmouseover="f30(this)" onmouseout="f40(this)">home</a></li>
            <li><a href="account.php" onmouseover="f30(this)" onmouseout="f40(this)">account</a></li>
            <li><a href="logout.php" class="active" onmouseover="f30(this)" onmouseout="f40(this)">LogOut</a></li>
        </ul>
    </nav>
</body>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "sankeeth72", "test");
if (!$conn) {
    die("Connection failed due to " . mysqli_connect_error());
}
$query1 = "select image from account where emailid='" . $emailid . "'";
$result1 =  mysqli_query($conn, $query1);
$query2 = "select * from person where emailid='" . $emailid . "'";
$result2 =  mysqli_query($conn, $query2);
if ($result1->num_rows) {
    $row1 =  mysqli_fetch_array($result1);
    $row2 =  mysqli_fetch_array($result2);
    $img = $row1["image"];
    echo '<form action="editchanges.php" method="post" enctype="multipart/form-data" onsubmit="return f2()">';
    echo '<div class="demo"><img src="' . $row1["image"] . '">';
    echo '<p style="top:0px;left:190px;" >Username </p><input type="text" name="username" value=' . $user . ' required>';
    echo '<p style="top:38px;left:180px;">Proflie Image</p><pre><input type="file" name="image" onmouseover="curse(this)"></pre></div>';
    echo '<div class="display">';
    echo '<h1>Contact Details</h1>';
    echo '<pre><table><tr><td>EmailId:     </td><td><input type="text" name="emailid" value=' . $emailid . ' disabled ></input></td><tr>';
    echo '<tr><td>Mobile No:     </td><td><input type="text" name="phoneno" value=' . $row2["phno"] . ' required></input></td><tr>';
    echo '<tr><td>Location:          </td><td><input type="text" name="location" value=' . $row2["location"] . ' required></input></td><tr>';
    echo '</table><h1>General Information</h1>';
    echo '<table><tr><td>DOB:</td><td><input type="date" id="dob" name="dob" value=' . $row2["dob"] . ' required></input></td><tr>';
    echo '<tr><td>Enter the Password:</td><td><input type="password" id="pwd" name="pwd"></td></tr></table></pre>';
    echo '<button type="submit" onmouseover="curse(this)">Submit</input></form>';
}
