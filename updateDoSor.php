<?php
    include 'db.php';
    $id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE usuario SET nome_usuario = '$name', email_usuario = '$email' WHERE pk_usuario = '$id'";
        if($conn -> query($sql) === true){
            echo "Seus dados foram atualizados com sucesso!";
        } else {
            echo "Deu ruim $sql <br>" . $conn -> error; 
        }
        $conn -> close ();
        header("Location: read.php");
        exit ();
    }
    $sql = "SELECT * FROM usuario WHERE pk_usuario=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>

<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizando</title>
</head>
<body>
    <form method="POST" action="updateDoSor.php?id=<?php echo $row['pk_usuario'];?>"> 
        <label for="name"> Digite seu novo nome: </label>
        <input type="text" name="name" value= "<?php echo $row['nome_usuario']?>" required>
        <br>
        <label for="email"> Digite seu novo email: </label>
        <input type="email" name="email" value="<?php echo $row['email_usuario']?>"  required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="read.php"> Visualizar todos registros</a>
</body>
</html>