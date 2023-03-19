<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    
<body>


<h1>Producto</h1>
<h2>Acerca del producto:</h2>
<ul>
    <li><strong>Id:</strong> <em><?php echo $_POST['id']; ?></em></li>
    <li><strong>Nombre:</strong> <em><?php echo $_POST['nombre']; ?></em></li>
    <li><strong>Marca:</strong> <em><?php echo $_POST['marca']; ?></em></li>
    <li><strong>Modelo:</strong> <em><?php echo $_POST['modelo']; ?></em></li>
    <li><strong>Precio: $</strong> <em><?php echo $_POST['precio']; ?></em></li>
    <li><strong>Detalles:</strong> <em><?php echo $_POST['detalles']; ?></em></li>
    <li><strong>Unidades:</strong> <em><?php echo $_POST['unidades']; ?></em></li>
    <li><strong>Direccion de la Img:</strong> <em><?php echo $_POST['imagen']; ?></em></li>
    <li><strong>Eliminar (1=si, 0=no):</strong> <em><?php echo $_POST['eliminar']; ?></em></li>
</ul>


<?php
$id= $_POST['id'];

$nombre = $_POST['nombre'];
$marca  = $_POST['marca']; 
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
settype($precio,"double");

$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
settype($unidades,"int");

$imagen= $_POST['imagen'];
$eliminado = $_POST['eliminar'];


/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'Naomi_010402', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_error) 
{
die('Falló la conexión: '.$link->connect_error.'<br/>');
/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

$sql = "UPDATE productos SET nombre='$nombre', marca='$marca', modelo='$modelo', precio='$precio', detalles='$detalles', unidades='$unidades', imagen='$imagen', eliminado='$eliminado' WHERE id=$id";

if ($link->query($sql)===TRUE) {
    echo "La actualización se realizó correctamente.";
} else {
    echo "Mal ahi ";
}


$link->close();

?>

</body>
</html>