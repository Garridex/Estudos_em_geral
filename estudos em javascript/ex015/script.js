function verificar(){
    var data = new Date()
    var ano = data.getFullYear()
    var fano = window.document.getElementById('txtano')
    var res = document.getElementById('res')
    res.innerText = fano
    if(fano.value.length == 0 || fano.value > ano){
        window.alert('[ERRO] Reveja a entrada dos dados')
        res.innerText = 'preencha os dados acima para ver o resultado'
    } else{
        window.alert('Tudo supimpa')
        res.innerText = 'preencha os dados acima para ver o resultado'
    }
}