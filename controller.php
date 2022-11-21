<?php
require_once('./Usuario.php');

$usuarioFormulario = $_POST;

$credencialesOK = false;
$userNum = 0;

foreach ($usuariosPosibles as $key => $usuario) {
    if ($usuarioFormulario['nombre'] == $usuario->getNombre() && $usuarioFormulario['passwd'] == $usuario->getPasswd()) { //si coincide el nombre y la contraseña     
        // echo "yes";
        $credencialesOK = true;
        $userNum = $key + 1; //no se pueden usar las keys tal cual en la url, porque 0 lo interpreta como null o false y luego en bienvenido.php no encuentra $usuariosPosibles[$key] cuando $key es 0. Por ello a este parámetro aquí se le suma 1 y luego en la vista se le resta 1
        break; //corto ejecución
    } else {
        // echo "no";
        $credencialesOK = false;
    }
}

if ($credencialesOK) {
    header("Location:bienvenido.php?user=$userNum"); //redirijo con un parámetro por url que contiene el número 
} else {
    header("Location:index.php?error=true"); //si no coincide la contraseña, redirijo con error
}
