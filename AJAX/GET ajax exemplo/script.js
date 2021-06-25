function ajax() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        window.document.getElementById("teste").innerHTML = this.responseText
    }
    xhttp.open("GET", "ajax_info.txt", true)
    xhttp.send();
    
}