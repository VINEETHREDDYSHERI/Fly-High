<?php
    $x=$_POST["emailid"];
    $y=$_POST["pwd1"];
    $conn=mysqli_connect("localhost","root","sankeeth72","test");
    if(!$conn)
    {
        die("Connection failed due to ".mysqli_connect_error());
        
    }$sql1="update account set password='".$y."' where emailid='".$x."'";
    $result=  mysqli_query($conn, $sql1);
    if($result)
    {
        header('Location:home.html');
    }
    else{
        echo 'ERROR'.  mysqli_error($conn);
    }


