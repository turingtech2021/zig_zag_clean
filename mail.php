<?php
function sendMail($name, $email, $phone, $address, $date){
    $to = "zigzagclean.india@gmail.com";
    $subject = "Online Booking $date";
    $headers = "From: $email";
    $txt = "$name \n $phone \n $address \n $date";
    mail($to,$subject,$txt,$headers);
}
?>