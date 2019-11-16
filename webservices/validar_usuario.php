<?php 


include 'conexion.php';

$nombre=$_POST['usuario'];
$clave=$_POST['password'];

//$nombre="wendy";
//$clave="202cb962ac59075b964b07152d234b70";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE nombre=? AND clave=?");
$sentencia->bind_param('ss',$nombre,$clave);
$sentencia->execute();
$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();
?>