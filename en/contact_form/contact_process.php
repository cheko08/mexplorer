<?php
$to = "contact@mexplorer-dmc.com";
$name = $_POST['name'];
$message = $_POST['message'];
$from = $_POST['email'];
$headers = "From:" . $from;
mail($to,$name,$message,$headers);
header( 'Location: http://www.mexplorer-dmc.com/sent.html' ) ;
?>