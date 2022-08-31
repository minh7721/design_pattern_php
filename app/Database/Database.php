<?php
namespace App\Database;
use PDO;
use PDOException;

class Database{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'password';
    const DB_NAME = 'book_store';
    public function connect(){
        try {
            $connect = "mysql:host=".self::HOST.";dbname=".self::DB_NAME.";charset=utf8";
            $pdo = new PDO($connect, self::USERNAME, self::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>