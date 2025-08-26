<?php

    include("connect.php");

    $cpf = $_POST['cpf'];
    $nome = $_POST["nome"];
    $cell = $_POST['cell'];
    $email = $_POST["email"];
    $end = $_POST["end"];

    $sql = "INSERT INTO clientes (cpf,nome,celular,email,endereco) VALUES ('$cpf','$nome','$cell','$email','$end')";
    
    if (mysqli_query($connect, $sql)) {
        echo "<h1>Cadastro Realizado com sucesso</h1>";
    }
    else {
        echo "Erro";
    }

?>