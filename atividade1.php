<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>


    <div>
        <form name="itemMusical" method="post">
            <div>
                <label for='tipo'>Selecione o tipo:</label>
                <select id="tipo" name="tipo">
                    <option value='cd'>CD</option>";
                    <option value='dvd'>DVD</option>";
                    <option value='k7'>K7</option>";
                    <option value='outros'>Outros</option>";<br>
                </select>
            </div>
            <div>
                <label for='interprete'>Interprete:</label>
                <input type='text' id='interprete' name='interprete'><br>
            </div>
            <div>
                <label>Album:</label>
                <input type='text' id='album' name='album'><br>
            </div>
            <div>
                <label>Data de compra:</label>
                <input type='date' id='dataCompra' name='dataCompra'><br>
            </div>
            <div>
                <label>Valor pago:</label>
                <input type='number' id='valorPago' name='valorPago'><br>
            </div>
            <div>
                <label>Observacao:</label>
                <input type='text' id='observacao' name='observacao'><br>
            </div>
            <div><input type="submit" name="enviar" value="Enviar" class="botao">

        </form>
    </div>
    <div>
</body>

</html>

<?php
class itemMusical
{
    public $tipo;
    public $interprete;
    public $album;
    public $dataCompra;
    public $valorPago;
    public $observacao;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemMusical = new itemMusical();
    $itemMusical->tipo = $_POST["tipo"];
    $itemMusical->interprete = $_POST["interprete"];
    $itemMusical->album = $_POST["album"];
    $itemMusical->dataCompra = $_POST["dataCompra"];
    $itemMusical->valorPago = $_POST["valorPago"];
    $itemMusical->observacao = $_POST["observacao"];

}

if (isset($itemMusical)) {
    echo "<h2> " . "Cadastro Efetuado" . "</h2>" . "<br>";
    echo "Tipo de mídia: " . $itemMusical->tipo . "</br>";
    echo "Nome do intérprete: " . $itemMusical->interprete . "</br>";
    echo "Nome do albúm: " . $itemMusical->album . "</br>";
    echo "Data de compra: " . $itemMusical->dataCompra . "</br>";
    echo "Valor pago: " . $itemMusical->valorPago . "</br>";
    echo "Obrservação: " . $itemMusical->observacao . "</br>";
}
?>
<style>
    body {
        font-family: 'Lato', sans-serif;
        background-color: #FFF;
    }

    div {
        width: 800px;
        margin: auto;
        padding-top: 30px;
    }

    .botao {
        background-color: #4d908e;
        border: none;
        color: white;
        padding: 8px 16px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 20px;
    }

    .botao:hover {
        transition: 0.5s;
        background-color: chocolate;
    }
</style>