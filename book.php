<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="book.css">
    <script src="Scripts/Scripts.js"></script>
</head>

<body>
    <nav>
        <img src="C.png" class="logo" alt="logo">
        <ul>
            <li><a href="user.php" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">home</a></li>
            <li><a href="account.php" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">Account</a></li>
            <li><a href="logout.php" class="active" onmouseover="darkRedTextColor(this)" onmouseout="blackTextColor(this)">LogOut</a></li>
        </ul>
        <p id="user" class="user">Welcome User</p>
    </nav>
    <div class="dem">
        <form action="sucess.html" method="post">
            <p>Pay with Credit Card</p>
            <table>
                <tr>
                    <td colspan="2">Credit Card Number</td>
                    <td>Name on Card</td>
                </tr>
                <tr>
                    <td colspan="2"><input type='text' name='cca'></td>
                    <td><input type='text' name='cn'></td>
                </tr>
                <tr>
                    <td colspan="2">Expiry Date</td>
                    <td>CVV</td>
                </tr>
                <tr>
                    <td><input type='month' name='ed'></td>
                    <td><input type='year' name='y'></td>
                    <td><input type='text' name='cvv'></td>
                </tr>
                <tr>
                    <p id="cost"></p>
                </tr>
            </table>
            <button type="submit" onmouseover="pointerCursor(this)">PAY NOW</button>
        </form>
    </div>
</body>

</html>

<?php
session_start();
$x = $_SESSION["single"];
$y = $_SESSION["round"];
echo '321' . $x;
$conn =  mysqli_connect("localhost", "root", "sankeeth72", "test");
if (!$conn) {
    die("connection failed" . mysqli_connect_errno());
}
$query = "select * from test.flights where flightno='" . $x . "'";
$result =  mysqli_query($conn, $query);
if (!$query) {
    die("connection failed" . mysqli_error($conn));
}
$row = $result->fetch_assoc();
$fare = $row["fare"];
$seat = $row["seats"];
echo '' . $fare . "" . $seat;
