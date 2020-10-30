<?php

class Vocab {

    protected $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }





    /**
     * insert new noun
     */
    public function insertNoun($kanji, $furi, $roma, $def) {
        $sql = 'INSERT INTO nouns (kanji, furi, romaji, definition)
                Values (?, ?, ?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $furi, $roma, $def]);

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
    public function insertVerb($kanji, $furi, $roma, $def, $type) {
        $sql = 'INSERT INTO verbs (kanji, furi, romaji, type, definition)
                Values (?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $furi, $roma, $type, $def]);

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
}