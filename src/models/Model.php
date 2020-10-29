<?php

class Model {
    protected $db;

    public function __construct(\PDO $pdo)
    {
        $this->db = $pdo;
    }
}