<?php

    include("connect.php");
    $nome = $_POST["pesquisar"];

    $sql = "SELECT * FROM clientes WHERE nome  LIKE '$nome'";

    $result = mysqli_query($connect,$sql);

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