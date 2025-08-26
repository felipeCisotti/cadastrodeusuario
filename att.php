<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connect.php");
    $cpf = $_POST["cpf"];
    $nome = $_POST["newName"];
    $cell = $_POST["newCell"];
    $email = $_POST["newEmail"];
    $end = $_POST["newEnd"];

    $sql = "UPDATE clientes SET nome = '$nome', celular = '$cell', email = '$email', endereco = '$end' WHERE cpf = '$cpf'";

    if (mysqli_query($connect, $sql) === TRUE) {
        echo "<h1>Cadastro atualizado com sucesso";
    }
    else {
        echo "<h1>Erro: " . mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>
</body>
</html>