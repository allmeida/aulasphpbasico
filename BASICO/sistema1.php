<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema1</title>
</head>
<body>
    
    <form method="POST">
        Valor1 <input name="valor1" />
        <br>
        Valor2 <input name="valor2" />
        <br>
        <input type="submit" value="Enviar" />
    </form>

    <?php
        function soma($valor1, $valor2) {
            $res = $valor1 + $valor2;

            return "Resultado <input value='" . $res . "' />";
        }

        if(isset($_POST['valor1']) && isset($_POST['valor2'])) {

        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];

        echo "Valor 1 recebido = " . $v1;
        echo "<br>";
        echo "Valor 2 recebido = " . $v2;
        echo "<br>";
        //echo "Resultado <input value='" . ($v1 + $v2) . "' />";
        echo soma($v1, $v2);
        }

    ?>



</body>
</html>

