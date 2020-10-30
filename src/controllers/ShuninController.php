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
        $vType = $_POST['vocab-type'];

        $kanji = $_POST['kanji'];
        $furi = $_POST['furi'];
        $roma = $_POST['roma'];
        $def = $_POST['def'];

        if ($vType == 'verb') {
            $verbType = $_POST['type'];
        }

        switch ($vType) {
            case 'noun':
                $insertFunc = 'insertNoun';
                $insertParams = "$kanji, $furi, $roma, $def";
                $this->vocab->insertNoun($kanji, $furi, $roma, $def);
                break;
            case 'verb':
                $insertFunc = 'insertVerb';
                $insertParams = "$kanji, $furi, $roma, $def, $verbType";
                $this->vocab->insertVerb($kanji, $furi, $roma, $def, $verbType);
                break;
            case 'adj':
                $insertFunc = 'insertAdj';
                break;
            
            default:
                die("No type specified");
                break;
        }
    }
}