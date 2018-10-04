<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "ACf6333e73c593ddd2564a3eb5fa2074a4";
$token  = "6ae07d08925da443ae19473aab58a306";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+821097865585", // to
                           array(
                               "from" => "+17075059843",
                               "body" => "alert!"
                           )
                  );

print($message->sid);
?>
