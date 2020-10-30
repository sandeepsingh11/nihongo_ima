<?php

$router->get('', 'IndexController@get');

$router->get('nouns', 'NounsController@get');

$router->get('verbs', 'VerbsController@get');

$router->get('shunin', 'ShuninController@get');
$router->post('shunin', 'ShuninController@post');