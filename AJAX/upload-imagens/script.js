$('#enviar').on('submit', function(e){
e.preventDefault();
$.ajax({
    url:'recebe.php',
    type: 'POST',
    data: new FormData(this),
    contentType:false,
    cache:false,
    processData: false,
    success: function(data){
        $('#erro').html(data)
    }
});
});