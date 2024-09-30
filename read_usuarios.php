<?php
include 'db.php';

$sql = "SELECT * FROM usuarios";

$result = $conn-> query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Read</title>
</head>
<body class='centralizar'>
    <table>
        <tr>
            <th>Id Usuario</th>
            <th>Nome Usuario</th>
            <th>Ações</th>
        </tr>
    <?php while($row = $result-> fetch_assoc()){
        ?>
        <tr>
                <td><?php echo $row['id_usuario']?></td>
                <td><?php echo $row['nome_usuario']?></td>
                <td>
                    <a href= "delete_usuario.php?id_usuario=<?php echo $row['id_usuario']?>">Excluir</a>
                    <a href="update_usuario.php?id_usuario=<?php echo $row['id_usuario']?>">Editar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>