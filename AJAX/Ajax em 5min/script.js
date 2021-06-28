var dados = new FormData();
$("#upload").on('submit',(function(e) {
e.preventDefault();
dados.append('nome', 'vitor');
dados.append('idade', '19');
$.ajax({
 url: 'meuscript.php',
 type: "POST", 
 method: 'post',
 data: dados, 
/*  data: new FormData(this), */
 processData:false,
 cache:false,
 contentType: false,
 success: function(resposta){
     console.log(resposta)
 }

})
}))
