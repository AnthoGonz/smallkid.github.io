<<?php
    $myemail = 'howdy@smallkid.band';//<-----Put Your email address here.

    $mail = $_POST['mail'];

    $to = $myemail;
    $email_subject = "New Merch Subscriber";
    $email_body = $mail;
    $headers = "From: $myemail\n";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: thanks.html');
    ?>