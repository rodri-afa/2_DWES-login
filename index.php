<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Mi página | Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/phosphor-icons"></script><!--  librería de iconos -->

</head>

<body>
    <div class="container shadow">
        <form action="./controller.php" method="post">

            <label for="nombre">Nombre:</label>
            <input id="nombre" type="text" name="nombre" required>

            <label for="passwd">Contraseña:</label>
            <input id="passwd" type="text" name="passwd" required>

            <?php
            if ($_GET['error'] == true) {
                require_once("./error.php");
            }
            ?>
            <input class="button primary-button" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>