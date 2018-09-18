<?php
$access_token = 'ULtkIAg2GBViAgFTMFmjyp0cGbiGKWf+qFhivuDsxvS+P+hliI+CK516jpFrnlJd3hu9vf7QVsuoZZyoyVflGpThMuFFFoqHc3hR5TAeQ3olCRXZkaIwkTRAVknrNNC1WMG9kLufsOYfrt45BfnEHwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;