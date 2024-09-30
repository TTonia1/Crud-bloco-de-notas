<?php
include 'db.php';

$sql = "SELECT * FROM conteudo 
INNER JOIN  categorias
on categorias.id_categorias = notas.fk_categorias 
INNER JOIN  usuario
on usuario.id_usuario= conteudo.fk_usuario";

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
            <th>Id Nota</th>
            <th>Nome Nota</th>
            <th>Conteudo</th>
            <th>Id Categorias</th>
            <th>Categoria</th>
            <th>Id Usuario</th>
            <th>Nome Usuario</th>
            <th>Ações</th>
        </tr>
    <?php while($row = $result-> fetch_assoc()){
        ?>
        <tr>
                <td><?php echo $row['id_conteudo']?></td>
                <td><?php echo $row['nome_conteudo']?></td>
                <td><?php echo $row['conteudo_nota']?></td>
                <td><?php echo $row['id_categorias']?></td>
                <td><?php echo $row['nome_categorias']?></td>
                <td><?php echo $row['id_usuario']?></td>
                <td><?php echo $row['nome_usuario']?></td>
                <td>
                    <a href= "delete.php?id_diario=<?php echo $row['id_conteudo']?>">Excluir</a>
                    <a href="update.php?id_diario=<?php echo $row['id_conteudo']?>">Editar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>