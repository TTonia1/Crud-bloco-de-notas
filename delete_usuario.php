<?php
include 'db.php';
$id_usuario = $_GET['id_usuario'];

$sql = "DELETE FROM usuario WHERE id_usuario ='$id_usuario'";
if($conn -> query($sql) === true){
    echo"Registro excluido";
}else{
    echo"Erro". $slq ."<br>".$conn -> error;
}
$conn ->close();
header("Location read_usuario.php");
exit();
?>