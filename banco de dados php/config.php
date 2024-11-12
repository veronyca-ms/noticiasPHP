<?php

$host = "localhost";
$bdNome = "zorp";
$usuario = "root";
$senha = "aluno";
$porta = 3306;

try {
  $pdo = new PDO("mysql:host=$host;port=$porta;dbname=$bdNome", $usuario, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro PDO: " . $e->getMessage();
}

?>
