<?php

class NounsController extends Controller {

    // function __construct() {
    //     echo 'contructed!';
    // }

    public function get() {
        include_once __DIR__ . '/../views/nouns.php';
    }
}