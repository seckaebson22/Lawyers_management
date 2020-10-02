<?php

class Lawyer {
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
    
    public function registerLawyer($name, $email, $phone_number, $address, $lawyers_desc, $lawyers_service, $lawyers_rating, $image, $biography){
        $query = "INSERT INTO lawyer (name, email, phone_number, address, lawyers_description, lawyers_service, lawyers_rating, image, biography) VALUES
        (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $phone_number);
        $stmt->bindParam(4, $address);
        $stmt->bindParam(5, $lawyers_desc);
        $stmt->bindParam(6, $lawyers_service);
        $stmt->bindParam(7, $lawyers_rating);
        $stmt->bindParam(8, $image);
        $stmt->bindParam(9, $biography);
        $stmt->execute();
    }

    public function fetchLawyers(){
        $query = "SELECT * FROM lawyer";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteLawyer($id){
        $query = "DELETE FROM lawyer WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function editLawyer($id){
        $query = "SELECT * FROM lawyer WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateLawyer($name, $email, $phone_number, $address, $lawyers_desc, $lawyers_service, $lawyers_rating, $image, $biography){
        $id = $_GET['id'];
        $query = "UPDATE lawyer SET name=?, email=?, phone_number=?,address=?, lawyers_description=?, lawyers_service=?, lawyers_rating=?, image=?, biography=?
        WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $phone_number);
        $stmt->bindParam(4, $address);
        $stmt->bindParam(5, $lawyers_desc);
        $stmt->bindParam(6, $lawyers_service);
        $stmt->bindParam(7, $lawyers_rating);
        $stmt->bindParam(8, $image);
        $stmt->bindParam(9, $biography);
        $stmt->bindParam(10, $id);
        $stmt->execute();
    }

    public function countNumberOfLawyers(){
        // count total number of rows
        $query = "SELECT COUNT(*) as total_rows FROM lawyer";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // get total rows
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $total_num_rows = $row['total_rows'];

        echo $total_num_rows;
    }

    public function lawyersRating($rating){
        $query = "SELECT * FROM lawyer WHERE lawyers_rating=? LIMIT 6";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $rating);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLawyersInformation($id){
        $query = "SELECT * FROM lawyer WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}