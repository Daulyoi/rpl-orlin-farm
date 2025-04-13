<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "db-orlinfarm";

$conn = "";

try {
    $conn = mysqli_connect($host, $user, $password, $dbname);
}

catch(mysqli_sql_exception) {
    echo "<b>Could not connect!</b>";
}

?>