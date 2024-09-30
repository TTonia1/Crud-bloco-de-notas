<?php
    include 'db.php';

    $id_usuario = $_GET['id_usuario'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome_usuario = $_POST['nome_usuario'];
       
        $sql = "UPDATE usuario SET nome_usuario='$nome_usuario' WHERE id_usuario='$id_usuario'";

        if ($conn->query($sql) === TRUE) {
            header("Location: read_usuario.php");
            exit();
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";;
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
    <form method="POST" action="update_usuario.php?id_usuario=<?php echo $row['id_usuario'];?>">
        <label for="nome_usuario">Nome Usuario</label>
        <input type="text" name="nome_usuario" class='input' value="<?php echo $row['nome_usuario']; ?>" required>
        <input type="submit"  class='botaozinho' value="Atualizar">
    </form>
</body>
</html>