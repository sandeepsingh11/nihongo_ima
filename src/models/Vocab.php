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
}