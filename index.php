<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><strong>Trabalhando com números aleatórios</strong></h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        
        <p>O valor gerado foi<strong>
        <?php
        // Gerando um número aleatório entre 0 e 100
        $numero = mt_rand(0, 100);
        // Exibindo o número gerado
        echo $numero;
        ?>
        </strong></p>
        
        <a href="index.php" class="button">🔄 Gerar outro</a>
    </div>
</body>
</html>