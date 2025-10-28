import { Requests } from "./Requests.js";

const Salvar = document.getElementById('salvar');

Salvar.addEventListener('click', async () => {
    const response = await Requests
        .SetForm('cadastro-cliente')
        .Post('/cliente/insert');
});