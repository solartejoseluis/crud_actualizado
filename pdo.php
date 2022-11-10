<?php
//modelo de conexion PDO  
$servername = "localhost";  
$username = "kiron";  
$password = "123456";
$dbname = "tutorialesya";
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'";
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC;  
try {  
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  // set the PDO error mode to exception  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  echo "Connected successfully";  
} catch(PDOException $e) {  
  echo "Connection failed: " . $e->getMessage();
}  
?>