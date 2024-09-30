<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome_conteudo = $_POST['nome_conteudo'];
    $conteudo_nota = $_POST['conteudo_nota'];
    $fk_usuario = $_POST['fk_usuario'];
    $fk_categorias = $_POST['fk_categorias'];
    $sql = "INSERT INTO conteudo (nome_conteudo, fk_categorias , fk_usuario)  VALUE ('$nome_conteudo', '$fk_categorias' , '$fk_usuario')";
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
        <label for="fk_usuario"> Id Usuario:</label>
        <input type="text" name="fk_usuario" required>
        <label for="fk_categorias"> Id Categorias:</label>
        <input type="text" name="fk_categorias" required>
        <input type="submit" value="Enviar">
     </form>
</body>
</html>