<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

if(empty($name)||empty($email)||empty($message))
{
    echo "Please fill required field";
}
else
{
    mail("md@jgoso.com", "Query-Meritea",$message,"From: $name<$email>");
    echo "<script type='text/javascript'>alert('Your message Sent Successfully');
    window.history.log(-1);
    </script>";
}




?>