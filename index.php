<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Palpites - Mega Sena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de Palpites - Mega Sena</h1>
        <div class="numbers-container">
            <?php
            function gerarNumerosMegaSena() {
                $numeros = [];
                while (count($numeros) < 6) {
                    $numero = rand(1, 60); 
                    if (!in_array($numero, $numeros)) { 
                        $numeros[] = $numero;
                    }
                }
                sort($numeros);
                return $numeros;
            }

            $palpite = gerarNumerosMegaSena();

            foreach ($palpite as $numero) {
                echo "<div class='number-box'>$numero</div>";
            }
            ?>
        </div>
        <button onclick="window.location.reload()">Gerar Novo Palpite</button>
    </div>
</body>
</html>