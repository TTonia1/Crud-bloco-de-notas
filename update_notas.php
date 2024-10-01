<?php
    include 'db.php';

    $id_nota = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conteudo_nota = $_POST['conteudo_nota'];

        $sql = "UPDATE notas SET, conteudo_nota='$conteudo_nota' WHERE id_conteudo=$id_conteudo";

        if ($conn->query($sql) === TRUE) {
            echo "Nota atualizada!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM notas WHERE id_conteudo=$id_conteudo";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Aulas</title>
</head>
<body>
    <form method="POST" action="update.php?id=<?php echo $row['id_conteudo'];?>">
    <br> Escreva aqui <input type="text" name="conteudo_nota" required> <br>
        <br> <input type="submit" value="Salvar edição da nota">
    </form>
</body>
</html>

