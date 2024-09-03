<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CREATE</title>
    </head>
    <body>
        
        <form method="POST" action="create.php">
            <label for="name"> Digite seu nome: </label>
            <input type="text" name="name" required>
            <br>
            <label for="email"> Digite seu email: </label>
            <input type="email" name="email" required>
            <input type="submit" value="Enviar">
        </form>

        <a href="read.php"></a>

    </body>
</html>

<?php
include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "INSERT INTO usuario (nome_usuario, email_usuario) VALUE ('$name', '$email')";

        if($conn -> query($sql) === true){
            echo "Novo registro coisado com sucesso!";
        } else {
            echo "Deu ruim $sql <br>" . $conn -> error;
        }
    }
    $conn -> close();
?>

<a href="updateDoSor.php"> Atualizar dados </a>