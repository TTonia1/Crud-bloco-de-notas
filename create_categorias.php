<?php
include 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

    $nome_categorias = $_POST ['nome_categorias'];

    $sql = "INSERT INTO categorias (nome_categorias) VALUE ('$nome_categorias')";

    if ($conn -> query($sql) === true){
        echo "Novo registro adicionado!";
    } else{
        echo "Erro $sql <br>" . $conn -> error;
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
    <form method="POST" action= "create_categorias.php">
        <label for="nome_categorias"> Categorias:</label>
        <input type="text" name="nome_categorias" required>
        <input type="submit" value="Adicionar">
    </form>
    
    <a href="read_notas.php">Ver notas.</a>
    
</body>
</html>