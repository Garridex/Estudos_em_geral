function carregar() {
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem') 
    
    var data = new Date()
    var hora = data.getHours() 

    msg.innerText = `Agora são ${hora} horas.`
    if (hora >= 0 && hora < 12) {
        //BOM DIA
        img.src = 'manhã.png'
        document.body.style.background = '#7d6746'
    } else if (hora >= 12 && hora < 18) {
        //BOA TARDE
        img.src = 'tarde.png'
        document.body.style.background = '#fea70c'
    } else {
        //BOA NOITE
        img.src = 'noite.png'
        document.body.style.background = '#036487'
    }
}