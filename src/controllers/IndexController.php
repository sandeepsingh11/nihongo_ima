<?php

class IndexController extends Controller {

    // function __construct() {
    //     echo 'contructed!';
    // }

    public function get() {
        include_once __DIR__ . '/../views/index.php';
    }
}