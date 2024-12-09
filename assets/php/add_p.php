<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conexionbd.php';
//nuevo producto
$Nombre= $_POST["productadd"];
$Cantidad= $_POST["cantidad_add"];
$proveedor=$_POST["productaddpro"];

$i_np = $link->prepare("INSERT INTO producto_add (id,cantidad,proveedor) VALUES (?,?,?)");
$i_np->bind_param("iii",$Nombre,$Cantidad,$proveedor);
if ($i_np->execute()) {
  header('location:../../productos.php');
} else {  
  echo "Error: " . $i_np->error;
}





?>
</body>
</html>