<?php
include 'db.php';
$id_categorias = $_GET['id_categorias'];

$sql = "DELETE FROM categorias WHERE id_categorias ='$id_categorias'";
if($conn -> query($sql) === true){
    echo"Registro excluido";
}else{
    echo"Erro". $slq ."<br>".$conn -> error;
}
$conn ->close();
header("Location read_categorias.php");
exit();
?>