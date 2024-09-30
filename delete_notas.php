<?php
include 'db.php';
$id_conteudo = $_GET['id_conteudo'];

$sql = "DELETE FROM conteudo WHERE id_conteudo ='$id_conteudo'";
if($conn -> query($sql) === true){
    echo"Registro excluido";
}else{
    echo"Erro". $slq ."<br>".$conn -> error;
}
$conn ->close();
header("Location read_notas.php");
exit();
?>