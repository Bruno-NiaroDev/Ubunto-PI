function consultaCNPJ(campo){
    var valor = campo.value
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://www.receitaws.com.br/v1/cnpj/" + valor,
        "method": "GET",
        dataType: "jsonp",
        "headers": {
            "cache-control": "no-cache",
            "Access-Control-Allow-Origin": "*",

        }
    }
    $.ajax(settings).done(function (response) {
        console.log(response)
        $('#nome_fantasia').val(response['fantasia'])
        $('#razao_social').val(response['nome'])
        $('#telefone').val(response['telefone'])
    }) 
    console.log(valor)
}

function buscarCEP(cep) {

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://viacep.com.br/ws/" + cep.value + "/json/",
        "method": "GET"
    }

    return dadosCEP = runAJAX(settings, function (response) {
           $('#cep').val(response['cep'])
           $('#uf').val(response['uf'])
           $('#cidade').val(response['localidade'])
           $('#bairro').val(response['bairro'])
           $('#logradouro').val(response['logradouro'])

    })
}

function runAJAX(settings, retorno) {
    $.ajax(settings).done(function (response) {
        retorno(response)
    })
}