<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 - PHP</title>
</head>


<body>
    <form action="rifa.php" method="post">
        <label for="premio">Prêmio:</label><br>
        <input name="premio" id="premio" type="text" maxlength="50" placeholder="Digite o Prêmio..."><br>

        <label for="data">Data:</label><br>
        <input name="data" id="data" type="date"><br>

        <label for="valor">Valor:</label><br>
        <input name="valor" id="valor" type="number" step="0.01" placeholder="Valor por Número..."><br>

        <label for="quantDeNumeros">Quantidade:</label><br>
        <input name="quantDeNumeros" id="quantDeNumeros" type="number" placeholder="Quantidade de Números..."><br>
<br>
<br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">

    </form>

</body>

</html>