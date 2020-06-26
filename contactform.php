<?php
if(isset($_GET['submit'])){
    $name= $_GET['name'];
    $email= $_GET['email'];
    $message= $_GET['message'];

    $to="nimshamohammed@gmail.com";
    $subject="Form submitted from personal website"
    $message="Name: ".$name."wrote a message for you\n" .$message."\n";
    $headers= "From: " .$email;



    if(mail($to,$subject,$message,$headers)){
        echo "Success"
            #header("Location: thankyou.html?mailsend");
    }else{
        echo "Not success"
    }
}
?>
