<?php
    include 'db.php';

    $sql = "SELECT * FROM usuario";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){ //se a variavel result recebe um número de colunas maior q 0
        echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>";
        while ($row = $result -> fetch_assoc()){
        echo "<tr>
            <td> {$row['pk_usuario']} </td>
            <td> {$row['nome_usuario']} </td>
            <td> {$row['email_usuario']} </td>
            <td> {$row['criado_em']} </td>
            <td> Ações </td>
            <td>
                <a href='updateDoSor.php?id={$row['pk_usuario']}'> Editar</a>
                <a href='delete.php?id={$row['pk_usuario']}'> Apagar</a>
            </td>
        </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado.";
    }
    $conn -> close ();
?>
<a href="create.php"> Inserir novo registro </a>
