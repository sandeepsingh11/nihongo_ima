<?php

class Model {
    protected $db;
    protected $conn;

    public function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    public function getDb() {
        return $this->db;
    }

    public function getConn() {
        return $this->conn;
    }
}