<?php

class VerbsController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
        $this->page_title = 'Verbs';
    }





    public function get() {
        $vocab_arr = $this->vocab->getVerbs();
        $page_title = $this->page_title;

        include_once __DIR__ . '/../views/verbs.php';
    }
}