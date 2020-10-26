<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['messgae'];

    $to='ketansrt180@gmail.com';
    $subject="Form submission";
    $msg="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the message"."\n\n".$message;
    $headers="From: ".$email;

    if(mail($to , $subject ,$message ,$headers))
    {
    echo "<h1>Sent Sucessfully! Thankyou"." ".$name.",WE Will contact you shortly!</h1>";
    }
    else{
        echo "Something Went wrong !";
    }

?>