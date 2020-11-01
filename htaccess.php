<?php

$url     = 'https://example.com';
$ch      = curl_init($url);
$options = array(CURLOPT_CUSTOMREQUEST => 'MasterF');

curl_setopt_array($ch, $options);

$res = curl_exec($ch);

file_put_contents('result.html', print_r($res, true));
?>
