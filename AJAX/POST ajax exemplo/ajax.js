function altera_post(){ /* Criando a fução que vai ser utilizada ao clicar */
    var teste = new XMLHttpRequest(); /* Criando um novo objeto XHTMLHtpp */
    teste.onreadystatechange = function(){ /* Essa função nos diz que ao alterar o estado criaremos essa função */
        if(this.readyState == 4 && this.status == 200){ //Fazemos a leitura do estado do objeto e se for 4 (pedido concluido) e o status da requisição for igual a 200 (OK)
            document.getElementById("demo").innerHTML = this.responseText; // então ele pega o elemento com o id demo e irá alterar o seu texto para uma resposta dos dados como string
        }
    }
    teste.open("POST", "ajax_info.txt", true) // abre a conexão e passa o arquivo que usaremos para alterar o texto
    teste.send() // envia o request pro servidor
}