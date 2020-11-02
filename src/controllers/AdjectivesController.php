<?php

class AdjectivesController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }





    public function get() {
        $vocab_arr = $this->vocab->getAdj();

        include_once __DIR__ . '/../views/adj.php';
    }
}