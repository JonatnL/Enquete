<?php
include 'config.php';


$stmt = $conn->query("SELECT * FROM Perguntas ORDER BY data_criacao DESC LIMIT 1");
$pergunta = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $conn->prepare("SELECT * FROM OpcoesResposta WHERE pergunta_id = ?");
$stmt->execute([$pergunta['id']]);
$opcoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> <?php echo htmlspecialchars($pergunta['pergunta']); ?></h1>
        <form action="votar.php" method="post">
            <?php foreach ($opcoes as $opcao): ?>
                <label>
                    <input type="radio" name="opcao_id" value="<?php echo $opcao['id']; ?>"> 
                    <?php echo htmlspecialchars($opcao['opcao']); ?>
                </label><br>
            <?php endforeach; ?>
            <button type="submit">Votar</button>
        </form>
    </div>
</body>
</html>


