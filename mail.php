<?php

$msg = $_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
if (mail("sbamniya23@gmail.com", "[Inquiry] New contact from Github.io by " . $_POST['name'] . " Regarding - " . $_POST["purpose"], "Reply to: " . $_POST['email'] . "<br />" . $msg, array("from" => "sbamniya23@gmail.com"))) {
  echo "mail sent successully";
} else {
  echo "Error while sending email";
}
