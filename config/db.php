<?php

require '../vendor/autoload.php'; // Pastikan ini sesuai dengan path ke autoload Composer

use Dotenv\Dotenv;

class Database {
    private $host;
    private $dbName;
    private $user;
    private $pass;
    private $mysqli;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $this->host = $_ENV['DB_HOST'];
        $this->dbName = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASS'];

        $this->connect();
    }

    private function connect() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
        if ($this->mysqli->connect_error) {
            die("Database connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function getConnection() {
        return $this->mysqli;;
    }
}
