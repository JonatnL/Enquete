<?php
include 'config.php';

if (isset($_POST['opcao_id'])) {
    $opcao_id = (int) $_POST['opcao_id'];

    // Atualizar o número de votos para a opção escolhida
    $stmt = $conn->prepare("UPDATE ResultadosVotacao SET votos = votos + 1 WHERE opcao_id = ?");
    $stmt->execute([$opcao_id]);

    $mensagem = "Obrigado por votar!";
} else {
    $mensagem = "Por favor, escolha uma opção!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Voto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $mensagem; ?></h1>
        <a href="resultado.php">Ver resultados</a><br>
        <a href="index.php">Voltar para a enquete</a>
    </div>
</body>
</html>
