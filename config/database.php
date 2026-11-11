<?php
  $host = getenv('DB_HOST') ?: 'db';
  $dbname = getenv('DB_NAME');
  $username = getenv('DB_USER');
  $password = getenv('DB_PASS');

  try{
      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      
  } catch(PDOException $e){
    echo 'Erro na conexão do banco de dados' . $e->getMessage();
  }

?>