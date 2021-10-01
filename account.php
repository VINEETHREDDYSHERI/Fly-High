<?php
session_start();
$user = $_SESSION["username"];
$emailid = $_SESSION["emailid"];
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
    echo '<div><div class="demo"><img src="' . $row1["image"] . '">';
    echo '<p>' . $user . '</p>';
    echo '<a href="edit.php">Edit Profile</a></div>';
    echo '<div class="display">';
    echo '<h1>Contact Details</h1>';
    echo '<pre><p style="text-transform: none;">Email Address      :  ' . $row2["emailid"] . '</p>';
    echo '<p>MOblie NO          :  ' . $row2["phno"] . '</p>';
    echo '<p>Location           :  ' . $row2["location"] . '</p>';
    echo '<h1>General Information</h1>';
    echo '<p>Date of Birth      :  ' . $row2["dob"] . '</p>';
    echo '<p>Gender             :  ' . $row2["gender"] . '</p></pre></div></div>';
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="account.css">
    <script src="script1.js"></script>
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

</html>