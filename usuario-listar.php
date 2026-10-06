<?php include_once 'usuario-controlador.php'; ?>
<?php $usuarios = listar(); ?>

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