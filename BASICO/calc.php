<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora Basica</title>
    <style>
      input, select{padding:10px; margin: 5px;}
     </style>
</head>

<body>
    <form method="post">
        Digite Primeiro valor : <input type="number" name="txtnum1" value="" placeholder="Digite um numero"><br></br>
        Digite Segundo valor : <input type="number" name="txtnum2" value="" placeholder="Digite um numero "><br></br>

        <input type="submit" name="a" value="SOMA"> 
        <input type="submit" name="s" value="SUBTRAÇÃO"> 
        <input type="submit" name="m" value="MULTIPLICAÇÃO"> 
        <input type="submit" name="d" value="DIVISÃO"><br></br> 

    </form>


    <?php
    if (isset($_POST['a'])) {
        $n1 = $_POST['txtnum1'];
        $n2 = $_POST['txtnum2'];
        $total = $n1 + $n2;

        echo " Soma dos valores é " . $total;
    }
    if (isset($_POST['s'])) {
        $n1 = $_POST['txtnum1'];
        $n2 = $_POST['txtnum2'];
        $total = $n1 - $n2;

        echo " Subtração dos valores é " . $total;
    }
    if (isset($_POST['m'])) {
        $n1 = $_POST['txtnum1'];
        $n2 = $_POST['txtnum2'];
        $total = $n1 * $n2;

        echo " mutiplicação dos valores é " . $total;
    }
    if (isset($_POST['d'])) {
        $n1 = $_POST['txtnum1'];
        $n2 = $_POST['txtnum2'];
        $total = $n1 / $n2;

        echo "Divisão dos valores é " . $total;
    }
    ?>


</body>

</html>