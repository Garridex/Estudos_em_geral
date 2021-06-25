<?php
if($_FILES){
    $arquivo = $_FILES['foto'];
    if (move_uploaded_file($arquivo['tmp_name'], $arquivo['name'])){
        echo "imagem enviada com sucesso";

    }else{
        echo "erro ao enviar a imagem";
    }
}
?>