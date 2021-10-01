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
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <script src="script1.js"></script>
    <script>
        function vald() {
            var x = document.getElementById("emailid").value;
            var y = /^([a-z]{5,})([0-9]{2,})\@([a-z]{5})\.([a-z]{3})$/;
            if (x === "admin") {
                return true;
            } else if (x.match(y)) {
                return true;
            } else {
                alert("NOT VAILD INPUT");
                return false;
            }
        }
    </script>
</head>

<body>
    <nav>
        <img src="C.png" alt="logo" class="logo">
        <ul>
            <li><a href="home.html" onmouseover="f30(this)" onmouseout="f40(this)">home</a></li>
            <li><a href="signup.html" onmouseover="f30(this)" onmouseout="f40(this)">signup</a></li>
            <li><a class="active" href="login1.php" onmouseover="f30(this)" onmouseout="f40(this)">login</a></li>
        </ul>
    </nav>
    <div class="formalgin">
        <img src="login.png" alt="avatar" class="avataralgin">
        <h1>LOGIN FORM</h1>
        <form action='login.php' method='post'>
            <p>USERNAME:</p>
            <input type="text" id="emailid" name="emailid" placeholder="Enter the EmailId" onmouseover="f2(this)" required>
            <p>PASSWORD:</p>
            <input type="password" id="pwd" name="pwd" placeholder="Enter the password" required>
            <p style="font-size: 15px;"><input type="checkbox" name="remember[]" id="re" value="remember" style="height: 10px;margin-top:10px;" checked> Remember</p>
            <button type="submit" onmouseover="curse(this)">LOGIN</button>
            <a href="forgotpwd.html" class="link">Forgot the Password??</a><br>
            <a href='signup.html' class="link">Click here to Register</a>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_COOKIE["emailid"]) && isset($_COOKIE["pwd"])) {
    $email = $_COOKIE['emailid'];
    $pwd = $_COOKIE["pwd"];
    echo "<script> "
        . "document.getElementById('emailid').value='$email'; "
        . "document.getElementById('pwd').value='$pwd' ;"
        . "</script>";
}
?>