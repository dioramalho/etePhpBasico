<?php
include_once 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $cpf = isset($_POST['cpf']) ? trim($_POST['cpf']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $endereco = isset($_POST['endereco']) ? trim($_POST['endereco']) : '';

    cadastro($nome, $cpf, $email, $telefone, $endereco);
}
//  listar();

buscarPorId(4);
function buscarPorId($id) {
        global $pdo;
        $sql = "SELECT * FROM `usuario_tb` WHERE `id` = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($result);
}

    function cadastro($nome, $cpf, $email, $telefone, $endereco) {
        global $pdo;
        $sql = "INSERT INTO `usuario_tb` (`nome`, `cpf`, `email`, `telefone`, `endereco`)
        VALUES(:nome, :cpf, :email, :telefone, :endereco)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);

        $result = $stmt->execute();
        if ($result) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    function listar() {
        global $pdo;
        $sql = "SELECT * FROM `usuario_tb`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    function deletar($id) {
        global $pdo;
        $sql = "DELETE FROM `usuario_tb` WHERE `id` = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        if ($result) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    function atualizar($id, $nome, $cpf, $email, $telefone, $endereco) {
        global $pdo;
        $sql = "UPDATE `usuario_tb` SET `nome` = :nome, `cpf` = :cpf, `email` = :email, `telefone` = :telefone, `endereco` = :endereco WHERE `id` = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);
        $result = $stmt->execute();
        if ($result) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    



