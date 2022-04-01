<?php

// get rq
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8;');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: 
    Access-Control-Allow-Origin, 
    Content-Type, 
    Access-Control-Allow-Methods,
    Authorization,
    X-Request-Width
');

$data = json_decode(file_get_contents('php://input'));
$dataArray = (array)$data;
$keys = array_keys($dataArray);
$values = array_values($dataArray);

if ($data != null) {
    response('Success', 200);
} else {
    response('Invalid Request', 400);
}

function response($message, $code) {
    http_response_code($code);
    $response['message'] = $message;
    $json = json_encode($response);

    echo $json;
}

