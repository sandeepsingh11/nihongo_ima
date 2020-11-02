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