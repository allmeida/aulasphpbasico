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
        Valor 1 <input type="text" name="valor1" value=" " placeholder="informe um valor"/><br><br>
        Valor 2 <input type="text" name="valor2" value=" " placeholder="informe um valor"/><br><br>
        
        Selecione uma operação:
        <br><br>
        
        <input type="submit" name="somar" value=" + "/>
        <input type="submit" name="subtrair" value=" - " />
        <input type="submit" name="multiplicar" value=" * " />
        <input type="submit" name="dividir" value=" / " />
        <br><br>
        
        
    </form>

    <?php

        public function calc ()
        {
            $v1 = $_POST['valor1'];
            $v2 = $_POST['valor2'];
            $tipo = $_POST['tipo'];

            $res = $v1 + $v2;

            if ('somar') {
                $res = $v1 + $v2;
                echo "Resulatado" . $res;
                //<input type="text" name="res" value="{$res}" />

            } elseif ($tipo == subtrair) {
                $res = $v1 - $v2;

            } elseif ($tipo == multiplicar) {
                $res = $v1 * $v2; 
            
            } elseif ($tipo == dividir) {
                $res = $v1 / $v2;
            }
        }
    ?>


</body>
</html>