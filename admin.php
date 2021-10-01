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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
    <script src="Scripts/Scripts.js"></script>
</head>

<body>
    <nav>
        <img src="C.png" class="logo" alt="logo">
        <ul>
            <li><a href="#" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">home</a></li>
            <li><a href="admin.php" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">Flight Update</a></li>
            <li><a href="logout.php" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">LogOut</a></li>
        </ul>
    </nav>
    <div>
        <h1>What would you like to do?</h1>
        <ul>
            <li><a href="addflights.php" style="margin-left:3.5px" onmouseout="blackTextAndDimgrayBG(this)" onmouseover='dimgrayTextAndBlackBG(this)'>Add Flights</a></li>
            <li><a href="viewflights.php" onmouseout="blackTextAndDimgrayBG(this)" onmouseover='dimgrayTextAndBlackBG(this)'>View Flights</a></li>
        </ul>
    </div>





</body>