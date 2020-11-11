<?php

class IndexController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }

    public function get() {
        $vocab_arr = [];

        // form search logic
        if (isset($_GET['search'])) {
            $vocabToSearch = $_GET['search'];
            $vocabType = $_GET['vocab-type'];

            if ($vocabType == 'any') {
                // search through all tables
                $vocab_arr = $this->vocab->searchAnyVocab($vocabToSearch);
            }
            else {
                // search through a specific table
                $vocab_arr = $this->vocab->searchVocab($vocabType, $vocabToSearch);
            }
        }


        // get daily vocab
        $dailyVocab = $this->vocab->getDailyVocab();



        include_once __DIR__ . '/../views/index.php';
    }
}