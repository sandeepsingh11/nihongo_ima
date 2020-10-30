<?php

class VerbsController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }





    public function get() {
        $vocab_arr = $this->vocab->getVerbs();

        include_once __DIR__ . '/../views/verbs.php';
    }
}