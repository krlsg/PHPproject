<?php

include_once App/Router;

//var_dump(($_SERVER['REQUEST_METHOD']));
//var_dump(($_SERVER['REQUEST_URI']));

$req = [
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI']
];

$route = new Router();
$response = $route->handle($req);

return $response;