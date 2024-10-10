<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso.";
?>