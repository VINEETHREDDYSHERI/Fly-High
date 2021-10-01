<!DOCTYPE html>
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script1.js"></script>
    <script>
        function f1() {
            document.getElementById("demo").style.visibility = "hidden";
            document.getElementById("return").style.visibility = "hidden";
        }

        function f2() {
            document.getElementById("demo").style.visibility = "visible";
            document.getElementById("return").style.visibility = "visible";
        }
    </script>


</head>

<body>
    <nav>
        <img src="C.png" class="logo" alt="logo">
        <ul>
            <li><a href="user.php" onmouseover="f30(this)" onmouseout="f40(this)">home</a></li>
            <li><a href="#about" onmouseover="f30(this)" onmouseout="f40(this)">about</a></li>
            <li><a href="account.php" onmouseover="f30(this)" onmouseout="f40(this)">account</a></li>
            <li><a href="logout.php" class="active" onmouseover="f30(this)" onmouseout="f40(this)">LogOut</a></li>
        </ul>
        <p id="user" class="user">Welcome User</p>
    </nav>
    <section class="slide">
        <div class="wrapper">
            <p>Discover the Best Flights Deals Available</p>
            <form action="flights.php" method="post">
                <input type="radio" name="trip" value="round" onclick="f2()" checked>Round
                <input type="radio" name="trip" value="single" onchange="f1()">Single<br>
                <input type="text" name="from" placeholder="From:City Name" required>
                <input type="text" name="to" placeholder="To:City Name" required>
                <p>Depart Date</p>
                <input type="date" name="depart" required>
                <p id="demo">Return date</p>
                <input type="date" name="return" id="return">
                <button type="submit" onmouseover="curse(this)">search</button>
            </form>
        </div>
    </section>
    <section class="format" id="about">
        <h1 style="text-align: center"><b>FlyHigh</b></h1>
        <p>FlyHigh is India's leading online travel portal for flight bookings both domestic and international.
            FlyHigh was founded in 2006 with the objective of providing convenient and quick flight booking for customers and
            it has over the years strengthened its forte in this sector and emerged as the most preferred online travel brand for flight bookings.
        </p>
        <p>FlyHigh has continuously innovated and brought many firsts to its customers providing them ease of booking along with best budget options.
            Some of FlyHigh's most popular Flight services include web check-in, option for seat selection, meal requests, plus book now and pay later for international flights.
            Moreover FlyHigh Flights always show you the cheapest flights upfront and you can see lowest fares for a whole month at one go enabling you to choose the best date and
            flight as per your requirement. The FlyHigh App also enables you to do a voice search for flights, making search even more easier and convenient.
        </p>
        <p>FlyHigh has a strong focus on customer delight and to this end has a dedicated 24 X 7 call centre for flight bookings.
            Creating happy travellers is a mission it takes very seriously.
        </p>
        <p>FlyHigh has effectively used acquisitions as a strategy to gain a leadership position.
            In 2010 the acquisition of TSI and its subsidiaries enabled expansion of its B2B business
            especially in international air ticketing for small and medium scale enterprises.
            More recently in July 2017 it acquired Air Travel Bureau Ltd (ATB) thus positioning it at the top of the spectrum in Corporate Travel
            where flights is the key thrust area. </p>
    </section>


</body>

</html>
<?php
session_start();
$p = $_SESSION["username"];
echo "<script>"
    . "document.getElementById('user').innerHTML='Welcome $p';"
    . "</script>";

?>