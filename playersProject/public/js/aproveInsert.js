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

    return true;
}