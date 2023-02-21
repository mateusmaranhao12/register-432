<?php

    include "db.php";

    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decida se a origem em $_SERVER['HTTP_ORIGIN'] é uma
        // você deseja permitir e, em caso afirmativo:
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 1000');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
                // também pode estar usando PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
        }
    
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
                header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
        }
        exit(0);
    }
    
    $res = array('error' => false);
    $action='';
    
    if (isset($_GET['action'])) {
        
        $action=$_GET['action'];
    }

    if ($action == 'login') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = "Select * from `admin` where usuario='$usuario' AND senha='$senha'";

        $result = $conn -> query($sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $res['mensagem']="Usuário logado com sucesso!";
        } else {
            $res['error']=true;
            $res['mensagem']="E-mail ou senha incorretos!";
        }
    }

    if ($action == 'adicionarusuario') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $educacao = $_POST['educacao'];
        $genero = $_POST['genero'];

        $sql = "INSERT INTO `usuarios` (
                `id`,
                `nome`,
                `email`,
                `educacao`,
                `genero`
            ) VALUES (
                NULL, 
                '$nome', 
                '$email', 
                '$educacao', 
                '$genero'
        )";

        $result=$conn->query($sql);

        if ($result === true) {
            $res['error']=false;
            $res['mensagem']="Usuário adicionado com sucesso";
        } else {
            $res['error']=true;
            $res['mensagem']="Não foi possível adicionar este usuário!";
        }
    }

    $conn -> close();

    header("Content-type: application/json");
    echo json_encode($res);
    die();

?>