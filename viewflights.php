
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
        <script>
            function f3(obj)
            {
                obj.style.color="darkred";
            }
            function f4(obj)
            {
                obj.style.color="black";
            }
        </script>
    </head>
    <body>
        <nav>
            <img src="C.png" class="logo" alt="logo">
            <ul>
                <li><a href="#" onmouseover="f3(this)" onmouseout="f4(this)">home</a></li>
                <li><a href="admin.php" onmouseover="f3(this)" onmouseout="f4(this)">Flight Update</a></li>
                <li><a href="logout.php" onmouseover="f3(this)" onmouseout="f4(this)">LogOut</a></li>
            </ul>
        </nav>
        <div class="display">
            <?php
    $conn=mysqli_connect("localhost","root","sankeeth72","test");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }
    $query="select * from test.flights";
    $result=mysqli_query($conn,$query);
    if($result->num_rows)
    {
        echo "<table ><tr><th>FLIGHT NO</th><th>FROM</th>"
                    . "<th>TO</th><th>DEPART TIME</th>"
                    . "<th>ARRIVAL TIME</th><th>DEPART DATE</th>"
                    . "<th>RETURN DATE</th><th>SEATS</th>"
                    . "<th>FARE</th>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>".$row["flightno"]."</td><td>".$row["fromcity"]."</td>"
                    . "<td>".$row["tocity"]."</td><td>".$row["departtime"]."</td>"
                    . "<td>".$row["arrivaltime"]."</td><td>".$row["departdate"]."</td>"
                    . "<td>".$row["returndate"]."</td><td>".$row["seats"]."</td>"
                    . "<td>".$row["fare"]."</td></tr>";
        }
        echo "</table>";
    }
?>
            
        </div>

