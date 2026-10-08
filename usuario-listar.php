<?php
include_once 'usuario-controlador.php';

$usuarios = listar();
if (isset($_POST['buscar'])) {
    $usuarios = buscarPorNome($_POST['buscar']);
}
?>

<div class="container">
    <form method="POST" action="#">
        <label for="buscar" style="font-weight: bold;">Buscar Usuário</label>
        <input
            type="text"
            id="buscar"
            name="buscar"
            required>

        <button type="submit">
            Cadastrar
        </button>
    </form>
    <h2> Usuários Cadastrados</h2>
    <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Endereço</th>

        <?php foreach ($usuarios as $usuario) : ?>
            <tr style="width: 100%; border-collapse: collapse; border: 1px solid black;">
                <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['nome']; ?></td>
                <td style="width: 15%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['cpf']; ?></td>
                <td style="width: 25%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['email']; ?></td>
                <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['telefone']; ?></td>
                <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['endereco']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>