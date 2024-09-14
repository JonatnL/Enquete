<?php
$conn = new mysqli("localhost", "root", "", "meu_site");

if ($conn->connect_error) {
    die("Falha na conexão: ". $conn->connect_error);
}
?>