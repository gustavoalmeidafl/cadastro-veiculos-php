<?php
include "conexao.php";

$result = $conn->query("SELECT * FROM veiculos");

$veiculos = [];

while($row = $result->fetch_assoc()) {
  $veiculos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($veiculos);
?>