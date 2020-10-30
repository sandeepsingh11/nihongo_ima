<?php

class IndexController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }

    public function get() {
        include_once __DIR__ . '/../views/index.php';
    }
}