<?php
    include 'db.php';
    $id = $_GET['pk_usuario'];
    $sql = "DELETE FROM usuario WHERE pk_usuario = $id";
    if($conn -> query($sql) === true){
        echo "Deletado com sucesso!";
    } else {
        echo "Deu ruim $sql <br>" . $conn -> error;
    }
    $conn -> close ();
    header("Location: read.php");
    exit ();

?>