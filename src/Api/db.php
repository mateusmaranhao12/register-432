<?php 

    $conn = new mysqli("localhost", "root", "", "register-432");

    if (!$conn) {
        echo "Erro, banco de dados não encontrado";
    }

?>