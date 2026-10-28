

<hr>
<form for="buscar" method="POST" action="#">
    <label  style="font-weight: bold;">Buscar Usuário</label>
    <input
        type="text"
        id="buscar"
        name="buscar"
        required>

    <button type="submit">
        Buscar
    </button>
</form>
<h2> Usuários Cadastrados</h2>
<table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
    <th>Nome</th>
    <th>CPF</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Ações</th>

    <?php foreach ($usuarios as $usuario) : ?>
        <tr style="width: 100%; border-collapse: collapse; border: 1px solid black;">
            <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['nome']; ?></td>
            <td style="width: 15%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['cpf']; ?></td>
            <td style="width: 25%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['email']; ?></td>
            <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['telefone']; ?></td>
            <td style="width: 20%; border-collapse: collapse; border: 1px solid black;"><?php echo $usuario['endereco']; ?></td>
            <td style="border-collapse: collapse; border: 1px solid black;">
                <a href="usuario-controlador.php?excluir=<?php echo urlencode($usuario['id']); ?>" onclick="return confirm('Deseja excluir este usuário?');" style="display: inline-block; background-color: #dc3545; color: white; text-decoration: none; padding: 8px 12px;">
                    Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>