<?php
include 'db.php';

$sql = "SELECT * FROM categorias";

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
            <th>Id Categorias</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
    <?php while($row = $result-> fetch_assoc()){
        ?>
        <tr>
                <td><?php echo $row['id_categorias']?></td>
                <td><?php echo $row['nome_categorias']?></td>
                <td>
                    <a href= "delete_categorias.php?id_categorias=<?php echo $row['id_categorias']?>">Excluir</a>
                    <a href="update_categorias.php?id_categorias=<?php echo $row['id_categorias']?>">Editar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>