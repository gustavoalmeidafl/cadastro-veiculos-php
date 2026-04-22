<?php
include("conexao.php");

$sql = "INSERT INTO veiculos 
(placa, marca, modelo, ano_fabricacao, ano_modelo, cor, combustivel, quilometragem, chassi, renavam, data_cadastro, observacoes)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
  "sssiiissssss",
  $_POST['placa'],
  $_POST['marca'],
  $_POST['modelo'],
  $_POST['ano_fabricacao'],
  $_POST['ano_modelo'],
  $_POST['cor'],
  $_POST['combustivel'],
  $_POST['quilometragem'],
  $_POST['chassi'],
  $_POST['renavam'],
  $_POST['data_cadastro'],
  $_POST['observacoes']
);

if ($stmt->execute()) {
  echo "Veículo cadastrado com sucesso!";
} else {
  echo "Erro ao cadastrar";
}
?>