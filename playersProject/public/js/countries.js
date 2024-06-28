document.addEventListener('DOMContentLoaded', function() {
    fetch('https://servicodados.ibge.gov.br/api/v1/paises/%7Bpaises%7D')
        .then(response => response.json())
        .then(data => {
            let countries = data;
            let countrySelect = document.querySelector('select[name="pais"]');
            countries.forEach(country => {
                let option = document.createElement('option');
                option.value = country.id["ISO-3166-1-ALPHA-2"];
                option.textContent = country.nome.abreviado;
                countrySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Erro ao carregar países:', error));
});
