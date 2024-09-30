<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome_usuario = $_POST['nome_usuario'];
    $sql = "INSERT INTO usuario (nome_usuario) VALUE ('$nome_usuario')";
    if($conn -> query($sql) === true){
        echo"Novo registro adiocionado";
    }else{
        echo"Erro". $slq ."<br>".$conn -> error;
    }
}
$conn -> close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
     <form method="POST" action= "create_usuario.php">
        <label for="nome_usuario"> Nome:</label>
        <input type="text" name="nome_usuario" required>
        <input type="submit" value="Enviar">
     </form>
</body>
</html>
