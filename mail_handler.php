<?php
if (isiet($_POST['submit'])){
    $to="nimshamohammed@gmail.com";
    $from=$_POST['email'];
    $name=$_POST['name'];
    $subject="Form Submitted from Personal website";
    $subject2="Copy of form submission";
    $message=$name." "."has send a message for you.\n\n".$_POST['message'];

    $headers="From:".$from;
    mail($to,$subject,$message,$headers);
    header('Location:thankyou.html');
}