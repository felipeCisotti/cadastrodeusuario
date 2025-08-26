<?php

    include("connect.php");
    $cpf = $_POST["deletar"];

    $sql = "DELETE FROM clientes WHERE cpf='$cpf'";

    $resultado = mysqli_query($connect, $sql);
    if ($resultado) {
        echo "<h1>Cliente exluido</h1>";
    }
    else {
        echo "<h1>Erro</h1>";
    }
    mysqli_close($connect);

?>