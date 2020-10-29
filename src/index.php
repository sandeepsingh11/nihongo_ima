<?php

/**
 * include config vals
 * include db connection
 * autoload to include all classes
 */
require __DIR__ . '/../config.php';
require __DIR__ . '/models/Database.php';
require __DIR__ . '/../vendor/autoload.php';
$conn = $pdo;



/**
 * get url and redirect accordingly
 */
Router::load(__DIR__ . '/routes.php')->direct(getUri(), getMethod(), $conn);

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