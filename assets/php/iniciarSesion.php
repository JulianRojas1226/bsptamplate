<?php
    session_start();
    include'conexion_be.php';

    if (isset($_POST['Usuario']) && isset($_POST['Codigo'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

// validacion de los campos requeridos
    $Usuario = validate($_POST['Usuario']);
    $Codigo = validate($_POST['Codigo']);

// se manda una alerta si el campo requerido esta en blanco
    if (empty($Usuario)){
        header("Location: ../../inse.php?error=El usuario es requerido");
        exit();
    }
    elseif (empty($Codigo)){
        header("Location: ../../inse.php?error=El codigo es requerido");
        exit();
}
// incriptar contraseña
    else{
        // $Codigo= md5($Codigo);

        $sql = "SELECT * FROM empleado WHERE nombre  = '$Usuario' AND codigo = '$Codigo'";
        $result = mysqli_query($Conexion, $sql);
        $filas=mysqli_fetch_array( $result );

// se manda alerta si los datos ingresados son erroneos
    if($filas['cargo'] == 1){
        header("location:../../indexad.html");
    }elseif ($filas['cargo'] == 2){
        header("location:../../usuario/usuario.php");#; code...
    }else{
                header("Location: ../../inse.php?error=El usuario o la clave son incorrectas");
                exit();
    }}}
        $row = mysqli_fetch_assoc($result);
        if($row['Usuario'] == $Usuario && $row['Codigo'] == $Codigo){
            $_SESSION['Usuario'] = $row['Usuario'];
            header("Location: ../admin/admin.php");
            exit();}
//             elseif{
//         }else{
//             header("Location: ../../inse.php?error=El usuario o la clave son incorrectas");
//             exit();
//         }
//     }else{
//         header("Location: ../../inse.php?error=El usuario o la clave son incorrectas");
//         exit();
//     }

// }}}}}}}}}}}
//     }
?>