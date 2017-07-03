<?php
$fullurl = $_SERVER['REQUEST_URI'];
$urlshortner = explode("/",$fullurl);
$url_value_passed_by_user = base64_decode($urlshortner[6]);
print('you are redirected in local server and your passed via url value in decode manner below : '.$url_value_passed_by_user);
?>
