<?php

class ShuninController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
    }



    public function get() {
        include_once __DIR__ . '/../views/shunin.php';
    }

    public function post() {
        $kanji = $_POST['kanji'];
        $def = $_POST['def'];

        $this->vocab->insertNoun($kanji, $def);
    }
}