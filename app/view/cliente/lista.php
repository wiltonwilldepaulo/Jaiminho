<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de clientes</title>
</head>

<body>
    <h1>Pesquisa de clientes</h1>
    <form id="cadastro-cliente">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <br>
        <br>
        <input type="text" name="sobre_nome" id="sobre_nome" placeholder="Digite seu sobre nome">
        <br>
        <br>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
        <br>
        <br>
        <input type="text" name="cep" id="cep" placeholder="Digite seu CEP">
        <br>
        <br>
        <input type="text" name="numero" id="numero" placeholder="Digite número do imóvel">
        <br>
        <br>
        <input type="text" name="logradouro" id="logradouro" placeholder="Digite número do imóvel">
        <br>
        <br>
        <input type="text" name="bairro" id="bairro" placeholder="Digite o nome do bairro">
        <br>
        <br>
        <input type="text" name="cidade" id="cidade" placeholder="Digite o nome da cidade">
        <br>
        <br>
        <select id="uf" name="uf">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>
        <br>
        <br>
        <button type="button" id="salvar">Salvar</button>
    </form>
    <script defer type="module" src="/js/listacliente.js"></script>
</body>

</html>