<?php
$name = $_POST['nameofuniversity'];
$number = $_POST['numberofstudents'];
$numberacc = $_POST['numberofstudentsaccomodation'];
$timearrival = $_POST['timeanddatearrival'];
$timedeparture = $_POST['timeanddatedeparture'];
$travel = $_POST['traveldetails'];
$contact = $_POST['contact'];
$eventslist = $_POST['eventslist'];

$to = 'outlawed@nujs.edu';
$message = 'University: '.$name."\r\n".' No. of students: '.$number."\r\n".'No. of students who needs accomodation: '.$numberacc."\r\n".'Time of Arrival: '.$timearrival."\r\n".'Time of Departure: '.$timedeparture."\r\n".'Travel details: '.$travel."\r\n".'Contact: '.$contact."\r\n".'Events: '.$eventslist."\r\n";
$headers = 'From: mail@nujsoutlawed.in' . "\r\n";


mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your Registration form was sent!"; // success message


?>
