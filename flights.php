<?php
$a=$_POST["from"];
$b=$_POST["to"];
$c=$_POST["depart"];
$d=$_POST["return"];
$conn=  mysqli_connect("localhost","root","sankeeth72", "test");
if(!$conn)
{
    die("connection failed".mysqli_connect_errno());
}
$query="select * from test.flights where fromcity='$a' and tocity='$b'";
$result=  mysqli_query($conn, $query);
if(!$query)
{
    die("connection failed".mysqli_error($conn));
}
if($result->num_rows)
{
    echo '<div class="from"><h1>'.$a.'-->'.$b.'</h1>';
    echo '<p>'.$c.'</p></div>';
    echo "<table class='single'><tr><th></th><th>Depart</th><th>Arrival</th><th>Duration</th><th>Price</th></tr>";
    while($row=$result->fetch_assoc())
    {
            $no1=$row["flightno"];
            $dur=$row["arrivaltime"]-$row["departtime"];
            if($dur<0)
            {
                $dur=24+$dur;
            }
            echo "<tr class='algin'><td><input type='radio' id='single' name='single' value='".$no1."' checked></td><td>".$row["departtime"]."</td><td>".$row["arrivaltime"]."</td><td>".$dur." hrs</td><td>".$row["fare"]."</td></tr>"; 
            echo "<tr><td colspan='5'></td>";
        
    }
}
else{
    echo '<p style="top:25%;left:300px;width:250px;position:absolute;font-family:arial;font-size:18px">Sry,NO Flights are available on '.$c.' From '.$a.' to '.$b.'</p>';
}
echo "</table>";
$query="select * from test.flights where fromcity='$b' and tocity='$a'";
$result=  mysqli_query($conn, $query);
if($result->num_rows)
{
   if($_POST["trip"]=="round")
    {
        echo '<div class="to"><h1>'.$b.'-->'.$a.'</h1>';
        echo '<p>'.$d.'</p></div>';
        echo "<table class='round'><tr><th></th><th>Depart</th><th>Arrival</th><th>Duration</th><th>Price</th></tr>";
        while($row=$result->fetch_assoc())
        {
                $no2=$row["flightno"];
                $dur=$row["arrivaltime"]-$row["departtime"];
                if($dur<0)
                {
                    $dur=24+$dur;
                }
               echo "<tr><td class='algin'><input type='radio' id='round' name='round' value='".$no2."' checked></td><td>".$row["departtime"]."</td><td>".$row["arrivaltime"]."</td><td>".$dur." hrs</td><td>".$row["fare"]."</td></tr>"; 
               echo "<tr><td colspan='5'></td></tr>";
        }
        echo "</table>";
    }
}
else{
    echo '<p style="top:25%;left:55%;width:250px;position:absolute;font-family:arial;font-size:18px">Sry,NO Flights are available on '.$d.' From '.$b.' to '.$a.'</p>';
}
?>
<?php
    session_start();
    $p=$_SESSION["username"];
    echo "<script>"
    . "document.getElementById('user').innerHTML='Welcome $p';"
    . "</script>";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head >
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flights.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="script1.js"></script>
        <script>
            function f88()
            {
                var as=document.getElementById("single").value;
            }
        
        </script>
    </head>
    <body>
        <nav>
            <img src="C.png" class="logo" alt="logo">
            <ul>
                <li><a href="user.php" onmouseover="f30(this)" onmouseout="f40(this)">home</a></li>
                <li><a href="account.php" onmouseover="f30(this)" onmouseout="f40(this)">Account</a></li>
                <li><a href="logout.php" class="active" onmouseover="f30(this)" onmouseout="f40(this)">LogOut</a></li>
            </ul>
            <p id="user" class="user">Welcome User</p>
         </nav>
        <form action="book.php" method="post" onsubmit="return f88()">
            <button type="submit" onmouseover="curse(this)">Book Now</button>
        </form>
    </body>
</html>