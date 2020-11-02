<?php

class ShuninController extends Controller {

    private $vocab;

    function __construct($vocab) {
        $this->vocab = $vocab;
        $this->page_title = 'Shunin';
    }



    public function get() {
        $page_title = $this->page_title;
        
        include_once __DIR__ . '/../views/shunin.php';
    }

    public function post() {
        $vType = $_POST['vocab-type'];

        $kanji = $_POST['kanji'];
        $furi = $_POST['furi'];
        $kana = $_POST['kana'];
        $roma = $_POST['roma'];
        $def = $_POST['def'];

        if ($vType == 'verb') {
            $verbType = $_POST['verb-type'];
        }
        else if ($vType == 'adj') {
            $adjType = $_POST['adj-type'];
        }



        switch ($vType) {
            case 'noun':
                $this->vocab->insertNoun($kanji, $furi, $kana, $roma, $def);
                break;
            case 'verb':
                $this->vocab->insertVerb($kanji, $furi, $kana, $roma, $def, $verbType);
                break;
            case 'adj':
                $this->vocab->insertAdj($kanji, $furi, $kana, $roma, $def, $adjType);
                break;
            
            default:
                die("No type specified");
                break;
        }
    }
}