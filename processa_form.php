<?php
include_once 'conn.php';

$nome = $_POST ['nome'];
$cargo = $_POST ['cargo'];
$salario = $_POST ['salario'];
$data_contratacao = $_POST ['data_contratacao'];

$stmt = $conn->prepare("INSERT INTO funcionarios (nome, cargo, salario, data_contratacao) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssid", $nome, $cargo, $salario, $data_contratacao);

if ($stmt->execute()) {
    echo "Novo Registro inserido com sucesso";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>