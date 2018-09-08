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
        <link rel="stylesheet" href="style.css">
    </head>
    
<?php
session_start();
?>
<?php
    require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
    $t=$_SESSION["emailid"];
    $x=rand(10000,50000);
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host ='smtp.gmail.com';
    $mail->Port = '587';
    $mail->isHTML(true);
    $mail->Username = 'vineethreddysheri9@gmail.com';
    $mail->Password = '8179141016';
    $mail->SetFrom('vineethreddysheri9@gmail.com');
    $mail->Subject = 'Welcome to FlyHigh';
    $mail->Body ='<a href="http://localhost:8080/JavaBridgeTemplate621/NewFolder/home.html"><img src="https://images.trvl-media.com/media/content/expus/graphics/promos/deals/tvly/mobile-background-flight.jpg"></a>'
            . '</section>
            <section class="format" id="about">
                <h1 style="text-align: center"><b>FlyHigh</b></h1>
                <p">FlyHigh is Indias leading online travel portal for flight bookings both domestic and international. 
                    FlyHigh was founded in 2006 with the objective of providing convenient and quick flight booking for customers and
                    it has over the years strengthened its forte in this sector and emerged as the most preferred online travel brand for flight bookings. 
                </p>
                <p>FlyHigh has continuously innovated and brought many firsts to its customers providing them ease of booking along with best budget options. 
                    Some of FlyHighs most popular Flight services include web check-in, option for seat selection, meal requests, plus book now and pay later for international flights. 
                    Moreover FlyHigh Flights always show you the cheapest flights upfront and you can see lowest fares for a whole month at one go enabling you to choose the best date and 
                    flight as per your requirement. The FlyHigh App also enables you to do a voice search for flights, making search even more easier and convenient. 
                </p>
            </section>';
    $mail->AddAddress($t);	
    if(!$mail->Send()) 
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
            header("Location:home.html");
	}
	



?>