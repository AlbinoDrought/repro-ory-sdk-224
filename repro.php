<?php

require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use \Ory\Client\Api\V0alpha2Api;
use Ory\Client\Configuration;
use \Ory\Client\Model\OAuth2Client;
use Psr\Http\Message\RequestInterface;

$stack = HandlerStack::create();
$stack->push(Middleware::mapRequest(function (RequestInterface $request) {
    echo "{$request->getMethod()} {$request->getUri()}\n";
    echo "{$request->getBody()}\n";
    echo "\n";
    return $request;
}));

$api = new V0alpha2Api(
    new Client(['handler' => $stack]),
    (new Configuration())
        ->setHost(getenv('REPRO_HOST') ?: 'http://localhost:4445')
);

// create random client, just for test
$id = $api->adminCreateOAuth2Client(new OAuth2Client())->getClientId();

// get client from API and then send it back
$client = $api->adminGetOAuth2Client($id);
$api->adminUpdateOAuth2Client($client->getClientId(), $client); // fails
