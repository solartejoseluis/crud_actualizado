<?php
//modelo de conexion PDO  
$dsn = "mysql:host=localhost;port=3306;dbname=tutorialesya";
$username = "kiron";  
$password = "123456";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
try {  
  $pdo = new PDO($dsn, $username, $password,$options);  
  // set the PDO error mode to exception  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  echo "Connected successfully";  
} catch(PDOException $e) {  
  echo "Connection failed: " . $e->getMessage();
  die();
}  
?>