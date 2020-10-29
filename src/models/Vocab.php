<?php

class Vocab {

    protected $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }





    /**
     * insert new vocab
     */
    public function insertNoun($kanji, $def) {
        $sql = 'INSERT INTO nouns (kanji, definition)
                    Values (?, ?)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$kanji, $def]);
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
}