<?php
include_once 'conexao.php';
include_once 'usuario-model.php';

if (isset($_GET['excluir'])) {
    deletar($_GET['excluir']);
    header('Location: usuario-controlador.php?usuario=listar');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cad'])) {

    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $cpf = isset($_POST['cpf']) ? trim($_POST['cpf']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $endereco = isset($_POST['endereco']) ? trim($_POST['endereco']) : '';

    cadastro($nome, $cpf, $email, $telefone, $endereco);
    var_dump($nome, $cpf, $email, $telefone, $endereco);
}



if (isset($_GET['usuario']) && $_GET['usuario'] === 'cadastro') {
    include_once 'usuario-cadastro-view.php';
}

if (isset($_GET['usuario']) && $_GET['usuario'] === 'listar') {

    $usuarios = listar();
    if (isset($_POST['buscar'])) {
        $usuarios = buscarPorNome($_POST['buscar']);
    }
    include_once 'header-view.php';
    include_once 'usuario-cadastro-view.php';
    include_once 'usuario-listar-view.php';
    include_once 'footer-view.php';
}


    



