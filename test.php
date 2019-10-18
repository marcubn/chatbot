<?php

use Dialogflow\WebhookClient;


$data = json_decode(file_get_contents('php://input'), true);

$parameters = $data['queryResult']['parameters'];
$url='https://www.tradus.com/en/search/transport-c1/';
foreach ($parameters as $key => $value) {
    if ($key == 'make') {
        $url.='make-'.$value.'/';
    }
    if ($key == 'model') {
        $url .= '?model='.$value;
    }
}

echo json_encode([
    'fulfillmentText' => 'Try this: '.$url
]);