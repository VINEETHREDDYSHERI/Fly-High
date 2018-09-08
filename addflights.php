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
        <script src="script1.js"></script>
    </head>
    <body>
        <nav>
            <img src="C.png" class="logo" alt="logo">
            <ul>
                <li><a href="#" onmouseover="f30(this)" onmouseout="f40(this)">home</a></li>
                <li><a href="admin.php" onmouseover="f30(this)" onmouseout="f40(this)">Flight Update</a></li>
                <li><a href="logout.php" onmouseover="f30(this)" onmouseout="f40(this)">LogOut</a></li>
            </ul>
        </nav> 
        <div class="flights">
            <form action="addflights1.php" method="post">
                <h1 style="text-align: center">FLIGHTS</h1>
                <p>Flight No</p>
                <input type="text" name="flightno" class="a" placeholder="Enter the FlightNO" required>
                <table>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                    <tr>
                        
                        <td><input type="text" name="from" placeholder="From:CityName" required></td>
                        <td><input type="text" name="to" placeholder="To:CityName" required></td>
                    </tr>
                    <tr>
                        <td>Depart Time</td>
                        <td>Arrival TIme</td>
                    </tr>
                    <tr>
                        <td><input type="time" name="departtime" required></td>
                        <td><input type="time" name="arrivaltime" required></td>
                    </tr>
                    <tr>
                        <td>Depart Date</td>
                        <td>Return Date</td>
                    </tr>
                    <tr>
                        <td><input type="date" name="depart" required></td>
                        <td><input type="date" name="return" required></td>
                    </tr>
                    <tr>
                        <td>Seats Availability</td>
                        <td>Fare</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="seats" placeholder="Seats Availability" required></td>
                        <td><input type="text" name="fare" placeholder="Enter the Fare" required></td>
                    </tr>
                    <button type="submit" >Add Flight</button>
                </table>
            </form> 
        </div>
        
        
        
        
    </body>



