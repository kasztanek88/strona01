<?php
require_once 'vendor/autoload.php';
use Guzzle\Http\Client;
// create our http client (Guzzle)
$client = new Client('http://localhost', array(
    'request.options' => array(
        'exceptions' => false,
    )
));

$nickname = 'ObjectOrienter'.rand(0,999);
$data = array(
    'nickname' => $nickname,
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);

//$request = $client->post('/rest/web/api/programmers', null, json_encode($data));
//$response = $request->send();

// get a programmer resource
$request = $client->get('/rest/web/api/programmers/'.$nickname);
$response = $request->send();

echo $response;
echo "\n\n";

