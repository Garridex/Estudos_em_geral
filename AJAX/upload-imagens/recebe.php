<?php
$local = $_FILES['file']['tmp_name'];
$alvo = "upload/". $_FILES['file']['name'];
move_uploaded_file($local, $alvo);
