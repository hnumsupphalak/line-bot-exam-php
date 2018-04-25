<?php



require "vendor/autoload.php";

$access_token = 'k85Gth6HQZJlSbOytn0hi4hxVitdaEKFusTh65ak0CGPIcqGXoAWEA5JALhL9HhyV4PkvD7etKC50R4vLmJfzOWkwTp8cpL0N3IYKL88KPEqbUPm9qQkaI8Ez60l3b66GCDR1u3XbK9qlnWkRn3/WgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f36f4d94bd57d09ce6fc1e7c73ee1a7e';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







