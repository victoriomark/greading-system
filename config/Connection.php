<?php
namespace config;
use mysqli;
class Connection {
    private string $HOST_NAME = 'localhost';
    private string $USER_NAME = 'root';
    private string $PASSWORD = '';
    private string $DB_NAME = 'greading_system_2';
    public $conn;

    public function Connect() {
        $this->conn = new mysqli($this->HOST_NAME, $this->USER_NAME, $this->PASSWORD, $this->DB_NAME);

        if ($this->conn->connect_error) {
            die('Connection Problem: ' . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
