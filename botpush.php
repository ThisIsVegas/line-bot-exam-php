<?php



require "vendor/autoload.php";

$access_token = 'ULtkIAg2GBViAgFTMFmjyp0cGbiGKWf+qFhivuDsxvS+P+hliI+CK516jpFrnlJd3hu9vf7QVsuoZZyoyVflGpThMuFFFoqHc3hR5TAeQ3olCRXZkaIwkTRAVknrNNC1WMG9kLufsOYfrt45BfnEHwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'de41f619ef1c4910c2726b82a35179d0';

$pushID = 'Ud77c725ab37e75a515e81696af07d2ed';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







