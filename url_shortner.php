<?php

$custome_url = 'Enter custome url ';
$url_shortner = base64_encode($custome_url); # Encode a Custome Url in simple manner if we want create a logical algoritham in unguessable manner.
$url = 'http://localhost/srikeerthi/url_shortner/test/url_shortner/url_shortner_testing_server.php'; # kindly Enter the Prefered your convenient location. 
$UrlShortner = $url.'/'.$url_shortner;
header('Location: '.$UrlShortner);
?>
f
