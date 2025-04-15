<?php
include __DIR__ . '/../models/Pelanggan.php';
include __DIR__ . '/../config/db.php';

function showRegisterForm()
{
    include __DIR__ . '/../views/register.php';
}

function handleRegister()
{
    global $conn; // Use the global $conn variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        $user = new Pelanggan($conn);
        $success = $user->register($nama, $email, $phone, $password);

        if ($success) {
            header("Location: index.php?page=login");
        } else {
            echo "Registration failed.";
        }
    }
}
