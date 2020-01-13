<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    
    <h1>Calculadora</h1>
    <form method="post">
        Valor 1 <input type="text" name="valor1" value="" placeholder="informe um valor"/><br><br>
        Valor 2 <input type="text" name="valor2" value="" placeholder="informe um valor"/><br><br>
        
        <h2>Escolha uma operação:</h2>
        <br>
        
        <input type="submit" name="opcao" value="+" />
        <input type="submit" name="opcao" value="-" />
        <input type="submit" name="opcao" value="*" />
        <input type="submit" name="opcao" value="/" /> 
        <br>
        <br>      
        
    </form>

<?php
    if ($_POST) {

        $resultado = "";

        $tipo = $_POST['opcao'];
        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];   

        switch($tipo)
        {
            case "+":
                $tipo = "soma";
                $resultado = $v1 + $v2;
                echo "Resultado: " . $resultado;               
                break;

            case "-":
                $tipo = "subtrair";
                $resultado = $v1 - $v2;
                echo "Resultado: " . $resultado; 
                break;

            case "*":
                $tipo = "multiplicar";
                $resultado = $v1 * $v2;
                echo "Resultado: " . $resultado; 
                break;

            case "/":
                $tipo = "dividir";
                $resultado = $v1 / $v2;
                echo "Resultado: " . $resultado; 
                break;

        }
        return($resultado);
    }
?>


</body>
</html>