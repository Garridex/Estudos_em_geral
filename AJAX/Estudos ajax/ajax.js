function alterar(){
    var teste = new XMLHttpRequest();
    teste.onload = function(){
        window.document.getElementById('alterar').innerHTML = this.responseText
    }
    teste.open("GET", "ajax_info.txt", true)
    teste.send()
}
