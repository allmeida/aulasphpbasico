<?php


include_once 'Contato.php';
include_once 'funcoes.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<div class="container" style="margin-top: 40px">

<br>
    <h1>AGENDA TELEFÔNICA</h1>
<br>
<br>
    <form method="post" class="form-inline">
        <input type="text" class="form-control" name="nome" placeholder=" Digite o nome" />
        <input type="text" class="form-control" name="telefone" placeholder=" Digite o telefone" />

        <input type="submit" class="btn btn-primary" value="Salvar" />
        <input type="submit" class="btn btn-danger" name="excluir" value="Excluir" />
    </form>

    <h2>Contatos Salvos</h2>


<!--
<p>
    Francinildo Almeida -
    <a href="?comando=excluir&id=1">Editar</a>
</p>
-->
<?php
    //print_r($_SESSION['contatos']);
    listarContatos();
?>
</div>