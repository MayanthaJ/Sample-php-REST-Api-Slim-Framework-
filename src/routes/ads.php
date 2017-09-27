<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;
$app->get('/api/ads', function (Request $request, Response $response) {
    // $name = $request->getAttribute('name');
    // $response->getBody()->write("Advertisment ID, $adid");
    //
    // return $response;

    echo 'Test Api';
});


?>
