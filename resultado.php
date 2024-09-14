<?php
include 'config.php';


$stmt = $conn->query("SELECT * FROM Perguntas ORDER BY data_criacao DESC LIMIT 1");
$pergunta = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $conn->prepare("
    SELECT OpcoesResposta.opcao, ResultadosVotacao.votos 
    FROM OpcoesResposta 
    JOIN ResultadosVotacao ON OpcoesResposta.id = ResultadosVotacao.opcao_id 
    WHERE OpcoesResposta.pergunta_id = ?
");
$stmt->execute([$pergunta['id']]);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Enquete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado: <?php echo htmlspecialchars($pergunta['pergunta']); ?></h1>
        <ul>
            <?php foreach ($resultados as $resultado): ?>
                <li><?php echo htmlspecialchars($resultado['opcao']) . ': ' . $resultado['votos'] . ' votos'; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="index.html">Voltar para a Página</a>
    </div>
</body>
</html>
