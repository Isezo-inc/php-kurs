<?php
    // instantiate mailer
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    // configure mailer
    // http://phpmailer.worxware.com/index.php?pg=methods
    // http://phpmailer.worxware.com/index.php?pg=properties
    // https://www.google.com/settings/u/0/security/lesssecureapps
    $mail->IsSMTP();
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Username = "@mail.ru";
    $mail->Password = "";
    $mail->Port = 465; //587
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 1;
    $mail->SMTPSecure = "tls";
    

    // set From:
    $mail->SetFrom("Письмо счастья");

    // set body
    $mail->Body = "Вы нарушили, к оплате ";

    $mail->addAddress();

    // send email
    if ($mail->Send())
    {
        print("Sent text #{$i}.\n");
    }
    else
    {
        print($mail->ErrorInfo);
    }

    // clear To: field
    $mail->ClearAddresses();
    
?>
