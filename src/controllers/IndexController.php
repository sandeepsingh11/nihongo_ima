<?php

class IndexController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }

    public function get() {
        $vocab_arr = [];
        if (isset($_GET['search'])) {
            $vocabToSearch = $_GET['search'];

            $vocab_arr = $this->vocab->searchVocab($vocabToSearch);
        }

        include_once __DIR__ . '/../views/index.php';
    }
}