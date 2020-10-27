<?php

require __DIR__ . '/../vendor/autoload.php';



Router::load(__DIR__ . '/routes.php')->direct(getUri(), getMethod());

function getUri() {
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    return $uri;
}

function getMethod() {
    $method = $_SERVER['REQUEST_METHOD'];

    return $method;
}








// $request = $_SERVER['REQUEST_URI'];

// switch ($request) {
//     case '/' :
//     case '' :
//         require __DIR__ . '/views/index.php';
//         break;

//     case '/nouns' :
//         require __DIR__ . '/views/nouns.php';
//         break;

//     default:
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;
// }