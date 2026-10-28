


    <h2>Cadastro de Pessoa</h2>

    <form id="cad" method="POST" action="#">
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

