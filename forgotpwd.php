<?php
    
    $a=$_POST["emailid"];
    require'PHPMailer-5.2.25/PHPMailerAutoload.php';
    $x="http://localhost:8080/JavaBridgeTemplate621/NewFolder/pwd.html";
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
    $mail->Subject = 'Forgot Password';
    $mail->Body = "As for password please visit the following link to reset your Password "."$x";
    $mail->AddAddress($a);
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        header("Location:home.html");
    }
