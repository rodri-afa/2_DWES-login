<?php
require_once('./Usuario.php');

// echo $usuario1;
// die();

$userNum = empty($_GET['user']) ? null : $_GET['user'];


$usuarioLoggeado = $usuariosPosibles[$userNum - 1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página | Bienvenido 👋🏻</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="shadow">
        <h1>Bienvenid@ <?= $usuarioLoggeado->getNombre() ?> <?= $usuarioLoggeado->getEstado() ?> !</h1>
        <form action="./index.php">
            <button class="button outlined-button" type="submit">Salir</button>
        </form>
    </header>
    <div class="container shadow welcome-container">
        <h2>Tu perfil</h2>
        <p>Nos complace tenerte de vuelta por aquí, <?= $usuarioLoggeado->getNombre() ?></p>
        <hr>
        <div class="hobbies">
            <h3>Tus hobbies:</h3>
            <ul>
                <?php
                foreach ($usuarioLoggeado->getHobbies() as $hobbie) {
                    echo "<li>$hobbie</li>";
                }
                ?>
            </ul>

        </div>

    </div>

</body>

</html>