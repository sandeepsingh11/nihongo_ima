<?php

class IndexController extends Controller {

    private $demo;

    function __construct($demo) {
        $this->demo = $demo;
        
        echo 'contructed!';
    }

    public function get() {
        include_once __DIR__ . '/../views/index.php';
    }
}