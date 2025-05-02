<?php

class Model
{
    public PDO $db;

    public function __construct()
    {
        $dbPath = MODEL . "db.sqlite";
        try {
            $this->db = new PDO("sqlite:$dbPath");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            error_log("Database connection failed: " . $err->getMessage());
            header("HTTP/1.1 500 Internal Server Error");
            echo "Sorry, something went wrong. Please try again later.";
            exit();
        }
    }
}
