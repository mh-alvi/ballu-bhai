<?php

namespace App\Config;

use PDO;
use PDOException;

class DatabaseConnection
{
    private $host = "localhost";
    private $db_name = "ballu_bhai_db";
    private $username = "root";
    private $password = "";
    public $connection;

    public function __construct()
    {
        $this->connection = null;
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
