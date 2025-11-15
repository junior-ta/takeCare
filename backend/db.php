<?php
$host = "localhost";
$dbname = "health_app";
$username = "root";
$password = ""; // XAMPP default = empty

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (Exception $e) {
  die("DB connection error: " . $e->getMessage());
}
?>
