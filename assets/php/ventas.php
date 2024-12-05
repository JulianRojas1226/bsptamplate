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

// registro entrada detalles   
$usuario= $_POST["user"];
$n_mesa = $_POST["n-mesa"];
$i_no = $link->prepare("INSERT INTO orden (mesa,emp) values (?,?)");
$i_no->bind_param("ii",$n_mesa,$usuario);
if ($i_no->execute()) {
    header("Location: ../../ventas.php?modal=2&mesa=" . $n_mesa);
  } else {  
    echo "Error: " . $i_no->error;
  }

?>  
</body>
</html>