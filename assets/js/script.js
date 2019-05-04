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