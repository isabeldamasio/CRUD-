<?php
    $servername = "localhost";
    $username = "root"; //nome de conexão do banco
    $password = "root"; //senha do meu banco (se n tiver senha, n precisa botar)
    $dbname = "crud_system"; //nome do banco
    $conn = new mysqli($servername,$username,$password,$dbname); //estabele conexão real c o banco

    if($conn -> connect_error){
        die("Conexão falhou:" . $conn -> connect_error);
    }
?>