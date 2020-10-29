<?php

class Model {
    protected $db;

    public function __construct(\PDO $pdo)
    {
        $this->db = $pdo;
        print_r($this->db);
    }
}