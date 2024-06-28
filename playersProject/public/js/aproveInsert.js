function validarFormulario() {
    var nome = document.querySelector('input[name="nome"]').value.trim();
    var pais = document.querySelector('select[name="pais"]').value;
    var valor = document.querySelector('input[name="valor"]').value.trim();
    var status = document.querySelector('select[name="status"]').value;
    var posicao = document.querySelector('select[name="posicao"]').value;
    var clube = document.querySelector('input[name="clube"]').value.trim();

    if (nome === '' || pais === 'Selecione o País' || valor === '' || status === '' || posicao === 'Selecione a Posição' || clube === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }

    // Suponha que você receba esses valores do backend após inserir um jogador
    let novoValorTotal = "200,00 mi.";
    let novosJogadoresAposentados = 10;
    let novosJogadoresAtividade = 25;

    // Chamada para atualizar os valores na página inicial
    atualizarValores(novoValorTotal, novosJogadoresAposentados, novosJogadoresAtividade);

    // Aqui você pode prosseguir com o envio do formulário ou outra ação necessária
    return true; // Retorne true se deseja prosseguir com o envio do formulário
}
