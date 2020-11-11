<?php

class Vocab {

    protected $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }




    /**
     * get a random vocab per day
     */
    public function getDailyVocab() {
        $date = date('Y,m,d');
        list($year, $month, $day) = explode(',', $date);


        // create a unique number based on the current date
        $uniqueNum = intval($year) + intval($month) + intval($day);


        // get a vocab type based on the unique date value
        $vocabType_int = $uniqueNum % 3;

        switch ($vocabType_int) {
            case 0:
                $vocabType_str = 'nouns';
                break;
            
            case 1:
                $vocabType_str = 'verbs';
                break;
            
            case 2:
                $vocabType_str = 'adjectives';
                break;
            
            default:
                $vocabType_str = '';
                break;
        }
        

        // get a random vocab
        $maxVocab = $this->getNumVocab($vocabType_str);
        $vocabId = ($uniqueNum % $maxVocab) + 1;

        $vocab_arr = $this->searchVocab($vocabType_str, $vocabId, $maxVocab);


        
        return $vocab_arr;
    }



    /**
     * get the total number of vocabs from a specified table
     */
    private function getNumVocab(string $table) {
        $count = 0;

        $sql = 'SELECT count(*) FROM ' . $table;
        $count = $this->conn->query($sql)->fetchColumn();

        return $count;
    }

    

    /**
     * search for any type of vocab
     */
    public function searchAnyVocab($vocab) {
        $row_arr = [];


        // search nouns table first
        $row_arr = $this->searchVocab('nouns', $vocab);
        if (sizeof($row_arr) > 0) {
            return $row_arr;
        }

        
        // if no results, search verbs table next
        $row_arr = $this->searchVocab('verbs', $vocab);
        if (sizeof($row_arr) > 0) {
            return $row_arr;
        }


        // if no results, search adjectives table next
        $row_arr = $this->searchVocab('adjectives', $vocab);
        if (sizeof($row_arr) > 0) {
            return $row_arr;
        }


        // else return empty array
        return $row_arr;
    }



    /**
     * search a vocab from a specific table
     * using a vocab string will return at least one index
     * using a vocab integer will return one index
     */
    public function searchVocab(string $table, $vocab_str_int, int $max = -1) {
        
        if (is_string($vocab_str_int)) {
            // if searching by string
            $row_arr = [];


            $sql = 'SELECT * FROM '. $table . '
                    WHERE kanji = ? OR kana = ? OR romaji = ?';
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$vocab_str_int, $vocab_str_int, $vocab_str_int]);
            
            
            foreach ($stmt as $row) {
                array_push($row_arr, $row);
            }



            return $row_arr;
        }
        else {
            // if searching by number (id)
            $sql = 'SELECT * FROM '. $table . '
                    WHERE id = ?';
    
                
            do {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$vocab_str_int]);
                
                $row = $stmt->fetch();

                $vocab_str_int = ($vocab_str_int * 3) % $max;
            } while (!$row);
            
            // if id not found, check another id
    
            

            return $row;
        }
    }



    /**
     * insert new noun
     */
    public function insertNoun($kanji, $furi, $kana, $roma, $def) {
        $sql = 'INSERT INTO nouns (kanji, furi, kana, romaji, definition)
                Values (?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $furi, $kana, $roma, $def]);

        header('Location: /shunin');
    }



    /**
     * get all nouns
     */
    public function getNouns() {
        $stmt = $this->conn->query('SELECT * FROM nouns');
        $nouns_arr = [];

        while ($row = $stmt->fetch()) {
            array_push($nouns_arr, $row);
        }

        return $nouns_arr;
    }



    /**
     * insert new verb
     */
    public function insertVerb($kanji, $furi, $kana, $roma, $def, $type) {
        $sql = 'INSERT INTO verbs (kanji, furi, kana, romaji, type, definition)
                Values (?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $furi, $kana, $roma, $type, $def]);

        header('Location: /shunin');
    }



    /**
     * get all verbs
     */
    public function getVerbs() {
        $stmt = $this->conn->query('SELECT * FROM verbs');
        $verbs_arr = [];

        while ($row = $stmt->fetch()) {
            array_push($verbs_arr, $row);
        }

        return $verbs_arr;
    }



    /**
     * insert new adjective
     */
    public function insertAdj($kanji, $furi, $kana, $roma, $def, $type) {
        $sql = 'INSERT INTO adjectives (kanji, furi, kana, romaji, type, definition)
                Values (?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $furi, $kana, $roma, $type, $def]);

        header('Location: /shunin');
    }



    /**
     * get all adjectives
     */
    public function getAdj() {
        $stmt = $this->conn->query('SELECT * FROM adjectives');
        $adj_arr = [];

        while ($row = $stmt->fetch()) {
            array_push($adj_arr, $row);
        }

        return $adj_arr;
    }
}