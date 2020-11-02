<?php

class NounsController extends Controller {

    private $vocab;
    
    function __construct($vocab) {
        $this->vocab = $vocab;
        $this->page_title = 'Nouns';
    }





    public function get() {
        $vocab_arr = $this->vocab->getNouns();
        $page_title = $this->page_title;

        include_once __DIR__ . '/../views/nouns.php';
    }
}