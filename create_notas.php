<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome_conteudo = $_POST['nome_conteudo'];
    $conteudo_nota = $_POST['conteudo_nota'];
    $id_usuario = $_POST['id_usuario'];
    $id_categorias = $_POST['id_categorias'];
    $sql = "INSERT INTO conteudo (nome_conteudo) VALUE ('$nome_conteudo')";
    if($conn -> query($sql) === true){
        echo"Novo registro Adicionado";
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
     <form method="POST" action= "create_notas.php">
        <label for="nome_conteudo"> Nome da Nota:</label>
        <input type="text" name="nome_conteudo" required>
        <label for="conteudo_nota"> Conteudo:</label>
        <input type="text" name="conteudo_nota" required>
        <label for="id_usuario"> Id Usuario:</label>
        <input type="text" name="id_usuario" required>
        <label for="id_categorias"> Id Categorias:</label>
        <input type="text" name="id_categorias" required>
        <input type="submit" value="Enviar">
     </form>
</body>
</html>