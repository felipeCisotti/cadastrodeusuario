<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update clientes</title>
    <link rel="stylesheet" href="up.css">
</head>
<body>
    
<?php

        include("connect.php");
    $sql = "SELECT cpf, nome, celular, email, endereco FROM clientes";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result)) {
        echo"<table class='tabela'> 
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Endereço</th>
                </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='tabe'><td>".$row["cpf"]. "</td><td>" .$row["nome"]. "</td><td>" .$row["celular"]. "</td><td>" .$row["email"]. "</td> <td>" .$row["endereco"]. "</td>";
    }
    echo "</table>";
}else {
    echo "No results";
}
mysqli_close($connect);

?>

<br>

<h2>Atualizar cadastro</h2>
<form action="att.php" method="post">
    <label>CPF do cliente a ser atualizado</label>
    <input type="numer" name="cpf"> <br>
    <label>Nome do cliente</label>
    <input type="text" name="newName"><br>
    <label>Celular</label>
    <input type="number" name="newCell"><br>
    <label>Email</label>
    <input type="text" name="newEmail"> <br>
    <label>Endereço</label>
    <input type="text" name="newEnd"> <br>
    <input type="submit" value="Atualizar dados">
</form>