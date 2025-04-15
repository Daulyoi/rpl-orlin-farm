<?php
require_once __DIR__ . '/../config/db.php';

class Pelanggan
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register($nama, $email, $phone, $password)
    {
        $stmt = $this->conn->prepare("INSERT INTO pelanggan (nama, email, nomor_telepon, password) VALUES (?, ?, ?, ?)");
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("ssss", $nama, $email, $phone, $hashed);
        return $stmt->execute();
    }
}
