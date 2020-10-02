<?php

class Message {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "lawyers_management";
    private $conn;

    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }

    public function sendMessage($name, $email, $subject, $message){
        $query = "INSERT INTO message (name, email, subject, message) VALUES 
        ('$name', '$email', '$subject', '$message')";
        $sql = $this->conn->prepare($query);
        $sql->execute();
    }

    public function fetchMessages(){
        $query = "SELECT * FROM message";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteMessage($id){
        $query = "DELETE FROM message WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function countNumberOfMessages(){
        // count total number of rows
        $query = "SELECT COUNT(*) as total_rows FROM message";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // get total rows
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $total_num_rows = $row['total_rows'];

        echo $total_num_rows;
    }
}