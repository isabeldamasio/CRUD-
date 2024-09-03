<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UPDATE</title>
    </head>
    <body>
        <form method="POST" action="update.php">
            <a> ATUALIZAR EMAIL </a>
            <br>
            <label for="email"> Digite seu email antigo: </label>
            <input type="email" name="email" required>
            <label for="emailNovo"> Digite seu novo email: </label>
            <input type="emailNovo" name="emailNovo" required>
            <input type="submit" value="Atualizar">

        </form>
    </body>
</html>

<?php
include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $emailNovo = $_POST['emailNovo'];
        
        $sql = "UPDATE usuario SET email_usuario = '$emailNovo' WHERE email_usuario = '$email'";


        if($conn -> query($sql) === true){
            echo "Seu email foi atualizado com sucesso!";
        } else {
            echo "Deu ruim $sql <br>" . $conn -> error;
        }
    }

    $conn -> close();
?>
