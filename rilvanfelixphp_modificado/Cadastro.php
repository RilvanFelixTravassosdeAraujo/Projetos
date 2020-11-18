<?php

require_once "db_connect.php";

if(isset($_POST['cadastro'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['endereço'];

    $sql = "insert into tb_usuarios(nome, email, endereço) values ('$nome', '$email', '$endereço')";
    $result = $connect->query($sql);


}

?>