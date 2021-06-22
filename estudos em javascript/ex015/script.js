function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fano = window.document.getElementById('txtano')
    var res = document.getElementById('res')
    if (fano.value.length == 0 || fano.value > ano) {
        window.alert('[ERRO] Reveja a entrada dos dados')
        res.innerText = 'preencha os dados acima para ver o resultado'
    } else {
        var fsex = window.document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('id', 'imagens/foto')
        
        if (fsex[0].checked) {
            genero = 'Homem'
            if (idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'bb-homem.png')
            } else if (idade >= 10 && idade < 21) {
                //adolescente
                img.setAttribute('src', 'jovem-homem.png')
            } else if (idade > 21 && idade > 50) {
                //adulto
                img.setAttribute('src', 'adulto-homem.png')
            } else {
                //idoso
                img.setAttribute('src', 'veio-homem.png')
            }

        } else if (fsex[1].checked) {
            genero = 'Mulher'
            if (idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'bb-mulher.png')
            } else if (idade >= 10 && idade < 21) {
                //adolescente
                
            } else if (idade > 21 && idade > 50) {
                //adulto
            } else {
                //idoso
            }
        }

    }
    res.style.textAlign = 'center'
    res.getElementById('foto')
}

