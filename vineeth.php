<?php

    $conn=  mysqli_connect("localhost","root","sankeeth72" , "test");
    if(!$conn)
    {
        die("connection failed".  mysqli_connect_error());
    }
    $y="vineeth";
    $x="insert into shedi(name) values('heelo')";
    $conn->query($x);
    if(mysqli_query($conn, $x)==TRUE)
    {
        echo "new record created succesfully";
    }
    else
    {
        echo "ERROR".$x."<br>".mysqli_error($conn);
    }
    mysqli_close($dbs);
    
    ?>

