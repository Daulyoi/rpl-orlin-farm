<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'register':
        require_once '../controllers/AuthController.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            handleRegister();
        } else {
            showRegisterForm();
        }
        break;

    case 'home':
    default:
        include '../views/landing.php';
        break;
}
