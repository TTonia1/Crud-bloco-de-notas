<?php
    include 'db.php';

    $id_categorias = $_GET['id_categorias'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome_categorias = $_POST['nome_categorias'];
       
        $sql = "UPDATE categorias SET nome_categorias='$nome_categorias' WHERE id_categorias='$id_categorias'";

        if ($conn->query($sql) === TRUE) {
            header("Location: read_categorias.php");
            exit();
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    $sql = "SELECT * FROM categorias WHERE id_categorias = '$id_categorias'";;
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("Registro não encontrado.");
    }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Aulas</title>
</head>
<body class='centralizar'>
    <form method="POST" action="update_categorias.php?id_categorias=<?php echo $row['id_categorias'];?>">
        <label for="nome_categorias">Nome Categorias</label>
        <input type="text" name="nome_categorias" class='input' value="<?php echo $row['nome_categorias']; ?>" required>
        <input type="submit"  class='botaozinho' value="Atualizar">
    </form>
</body>
</html>