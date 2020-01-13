<?php
session_start();

if (!isset($_SESSION['contatos'])) {
    $_SESSION['contatos'] = array();
}

if (isset($_POST['nome'])) {
    $contato = new Contato();
    $contato->setNome($_POST['nome']);
    $contato->setTelefone($_POST['telefone']);

    adicionarContato($contato);
}

if (isset($_POST['excluir'])) {
    excluirlista($indice);
}

if (isset($_GET['comando'])) {
    if ($_GET['comando'] == 'excluir') {
        excluir($_GET['id']);
    }
}

function adicionarContato(Contato $contato){
    array_push($_SESSION['contatos'],array(
        'nome' => $contato->getNome(),
        'telefone' => $contato->getTelefone())
    );

    header('Location: index.php');
}


function listarContatos() {
    foreach($_SESSION['contatos'] as $key => $contato) {
        echo "<p>";
        echo $contato['nome'] . " - ", $contato['telefone'] . " - ";
        echo "<a class='btn btn-sm btn-danger' href='?comando=excluir&id=" .$key . "'>Excluir</a>";
        echo "<p>";
    }
}

function excluir($indice) {
    //echo "Recebeu indice: " . $indice;
    array_splice($_SESSION['contatos'], $indice, 1);
}

function excluirlista($indice) {
    //echo "Recebeu indice: " . $indice;
    array_splice($_SESSION['contatos'], $indice);
}
    