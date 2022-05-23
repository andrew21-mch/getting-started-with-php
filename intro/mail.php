<?php
//send mail to multiple email in php
$to = "nyonggodwill11@gmail.com";
$subject = "Test Mail <br>";
$txt = "Hello world! <br> This is a test email, make sure to confirm and get to me";
$headers = "From: nfonandrew73@gmail.com";

mail($to,$subject,$txt,$headers);

?>