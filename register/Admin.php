<?php

class Admin {
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

    public function registerAdmin($first_name, $middle_name, $last_name, $username, $email, $password){
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (first_name, middle_name, last_name, username, email, password) VALUES 
        ('$first_name', '$middle_name', '$last_name', '$username', '$email', '$password_hash')";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function fetchAdmins(){
        $query = "SELECT * FROM admin";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteAdmin($id){
        $query = "DELETE FROM admin WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function editAdmin($id){
        $query = "SELECT * FROM admin WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateAdmin($first_name, $middle_name, $last_name, $username, $email, $password){
        $id = $_GET['id'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE admin SET first_name=?, middle_name=?, last_name=?, username=?, email=?, password=?
        WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $first_name);
        $stmt->bindParam(2, $middle_name);
        $stmt->bindParam(3, $last_name);
        $stmt->bindParam(4, $username);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $password_hash);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }

    public function loginAdmin($username, $password){
        if(!empty($username) && !empty($password)){
            $query = "SELECT * FROM admin WHERE username=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $username);

            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($password, $data[0]['password'])){
                $_SESSION['username'] = $username;

                header("location: dashboard.php");
            }else{
                $_SESSION['login_error_message'] = "Invalid Username or Password";
                header("location: index.php");
            }
        }
    }


}