
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

    </style>

</head>

<body>

<div class="container">

    <h2>Cadastro de Pessoa</h2>
    <form method="POST" action="usuariocontrolador.php">

        

        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            required
        >

        <label for="cpf">CPF</label>
        <input
            type="text"
            id="cpf"
            name="cpf"
            maxlength="14"
            placeholder="000.000.000-00"
            required
        >

        <label for="email">E-mal</label>
        <input
            type="text"
            id="email"
            name="email"
            placeholder="exemplo@email.com"
            required
        >

        <label for="telefone">Telefone</label>
        <input
            type="text"
            id="telefone"
            name="telefone"
            placeholder="(00) 00000-0000"
            required
        >
        <label for="endereco">Endereço</label>
        <input
            type="text"
            id="endereco"
            name="endereco"
            placeholder="Rua, Número, Bairro"
            required
        >

        

        <button type="submit">
            Cadastrar
        </button>

    </form>

</div>

</body>

</html>

