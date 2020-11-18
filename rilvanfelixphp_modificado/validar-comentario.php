<?php

//Esta linha abaixo esta fazendo a conexão com o banco de dados atraves do arquivo db_connect.php
require_once('db_connect.php');;

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $insert = "insert into comentarios values(null, '$nome', '$msg')";
    $result = $conn->query($insert);

    if($result){
        echo 'Dados inseridos!';
    }
}

?>