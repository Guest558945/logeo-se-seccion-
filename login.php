<?php
$usuario_correcto = "admin";
$contrasena_correcta = "1234";

    $usuario = $_POST["usuario"];
    $contra = $_POST["contrasena"];

    
    if ($usuario === $usuario_correcto && $contra === $contrasena_correcta) {
        header('Location: home.html');
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location= 'index.html'</script>";
    }
    

?>