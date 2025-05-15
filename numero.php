<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Análise de Número Real</title>
</head>
<body>
    <main>
        <h1>Análise Completa de Número Real</h1>
        <?php
        $num = $_POST["n"] ?? 0;
        
        // Verifica se é numérico
        if(!is_numeric($num)) {
            echo "<p class='erro'>Por favor, insira um número válido.</p>";
        } else {
            // Formata o número
            $numFormatado = number_format($num, 4, ',', '.');
            
            // Separa partes inteira e fracionária
            $parteInteira = (int)$num;
            $parteFracionaria = $num - $parteInteira;
            $parteFracionariaFormatada = number_format($parteFracionaria, 4, ',', '');
            
            // Exibe resultados
            echo "<p>Analisando o número <strong>$numFormatado</strong> informado:</p>";
            echo "<ul>";
            echo "<li>Parte inteira: <strong>$parteInteira</strong></li>";
            echo "<li>Parte fracionária: <strong>0$parteFracionariaFormatada</strong></li>";
            echo "</ul>";
        }
        ?>
        <input type="button" value="Voltar" onclick="history.back()">
    </main>
</body>
</html>