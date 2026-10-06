<?php

require_once 'conexao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $cpf = isset($_POST['cpf']) ? trim($_POST['cpf']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $endereco = isset($_POST['endereco']) ? trim($_POST['endereco']) : '';

    if ($nome == '' || $cpf == '') {

        $mensagem = 'Nome e CPF são obrigatórios.';

    } else {

        try {

            $sql = "INSERT INTO usuario_tb
                    (nome, cpf, telefone, email, endereco)
                    VALUES
                    (:nome, :cpf, :telefone, :email, :endereco)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':endereco', $endereco);

            $stmt->execute();

            $mensagem = 'Cadastro realizado com sucesso!';

            // Limpa os campos após salvar
            $nome = '';
            $cpf = '';
            $telefone = '';
            $email = '';
            $endereco = '';

        } catch (PDOException $e) {

            $mensagem = 'Erro ao inserir os dados: ' . $e->getMessage();

        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Cadastro</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .mensagem {
            margin-bottom: 20px;
            padding: 10px;
            background: #eeeeee;
            border-radius: 4px;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Cadastro de Pessoa</h2>

    <?php if ($mensagem != '') { ?>

        <div class="mensagem">
            <?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?>
        </div>

    <?php } ?>

    <form method="POST" action="">

        <label for="id">ID</label>

        <input
            type="text"
            id="id"
            name="id"
            value="Automático"
            disabled
        >

        <label for="nome">Nome</label>

        <input
            type="text"
            id="nome"
            name="nome"
            value="<?php echo isset($nome) ? htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') : ''; ?>"
            required
        >

        <label for="cpf">CPF</label>

        <input
            type="text"
            id="cpf"
            name="cpf"
            maxlength="14"
            placeholder="000.000.000-00"
            value="<?php echo isset($cpf) ? htmlspecialchars($cpf, ENT_QUOTES, 'UTF-8') : ''; ?>"
            required
        >

        <label for="telefone">Telefone</label>

        <input
            type="text"
            id="telefone"
            name="telefone"
            placeholder="(81) 99999-9999"
            value="<?php echo isset($telefone) ? htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8') : ''; ?>"
        >

        <label for="email">E-mail</label>

        <input
            type="email"
            id="email"
            name="email"
            value="<?php echo isset($email) ? htmlspecialchars($email, ENT_QUOTES, 'UTF-8') : ''; ?>"
        >

        <label for="endereco">Endereço</label>

        <input
            type="text"
            id="endereco"
            name="endereco"
            value="<?php echo isset($endereco) ? htmlspecialchars($endereco, ENT_QUOTES, 'UTF-8') : ''; ?>"
        >

        <button type="submit">
            Cadastrar
        </button>

    </form>

</div>

</body>

</html>
