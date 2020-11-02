<?php

class AdjectivesController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
        $this->page_title = 'Adjectives';
    }





    public function get() {
        $vocab_arr = $this->vocab->getAdj();
        $page_title = $this->page_title;

        include_once __DIR__ . '/../views/adj.php';
    }
}