<?php

class NounsController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }





    public function get() {
        $nouns_arr = $this->vocab->getNouns();

        include_once __DIR__ . '/../views/nouns.php';
    }
}