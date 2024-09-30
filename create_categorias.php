<?php
include 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

    $name = $_POST ['name'];
    $email = $_POST ['email'];

    $sql = "INSERT INTO user (name, email) VALUE ('$name' , '$email')";

    if ($conn -> query($sql) === true){
        echo "Novo registro adicionado com sucesso!";
    } else{
        echo "Erro $sql <br>" . $conn -> error;
    }

}

$conn -> close();


?>