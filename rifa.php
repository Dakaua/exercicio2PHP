    <?php
    if (
        isset($_POST["premio"]) &&
        isset($_POST["data"]) &&
        isset($_POST["valor"]) &&
        isset($_POST["quantDeNumeros"])
    ) {

        function converterData($data)
        {
            $dataFormatada = DateTime::createFromFormat('Y-m-d', $data);
            return $dataFormatada ? $dataFormatada->format('d-m-Y') : null;
        }

        // Exemplo de uso


        $premio = ucfirst($_POST["premio"]);
        $data = $_POST["data"];
        $valor = $_POST["valor"];
        $quantDeNumeros = $_POST["quantDeNumeros"];
        $cont = 0;

        echo"
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button>Imprimir</button>";
        while ($cont != $quantDeNumeros) {
            $cont++;

            echo "
    
<body>
<main>

    <section class = 'dados'>
        <h3>N°:$cont <h3>

        <div>
            <p>Nome:</p><br>
            <p>_________________________</p>
        </div>
        <div>
            <p>Endereço:</p><br>
            <p>_________________________</p>
        </div>
        <div>
            <p>Fone:</p><br>
            <p>_________________________</p>
        </div>
    </section>
    <section class = 'rifa'>
        <h1>Ação entre Amigos</h1>

        <p>Prêmio: $premio</p>
        <p>Valor:R$ " . number_format($valor, 2) . "</p>
        <p>Data: " . converterData($data) . "</p>

        <h4>N°$cont</h4>
    </section>
</main>

</body>
<br>
<br>
";
        }
    } else {
        echo "Os dados não foram fornecidos corretamente";
    }

    ?>


    <style>
        main {
            justify-content: center;

        }

        main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dados {
            box-sizing: border-box;
            padding: 50px;
            border-radius: 5px;
            border: 1px solid black;
            width: 30%;
            height: 70%;
            font-size: 20px;

        }

        .rifa {
            box-sizing: border-box;
            padding: 50px;
            border-radius: 5px;
            border: 1px solid black;
            width: 70%;
            height: 70%;
            font-size: 30px;
        }


        div p {
            margin: 5px;
        }
    </style>