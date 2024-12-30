<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo para recibir formularios</title>
</head>
<body>
    <h1>Ejemplo de formulario</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $password = "";
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        
        echo "<h2>Datos enviados:</h2>";
        echo "<p><strong>Usuario:</strong> $username</p>";
        echo "<p><strong>Contraseña:</strong> $password</p>";
    }
    ?>

    <!-- Formulario de Login -->
    <form method="POST" action="">
        <label for="username">Usuario:</label>
        <mi-input name="username" ></mi-input>
        <br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <br><br>

        <button type="submit">Enviar</button>
        <input type="reset" value="resetear">
    </form>

    <?php
    $manifest = json_decode(file_get_contents('./dist/.vite/manifest.json'), true);
    $script = $manifest['js/index.js']['file'];
    ?>
    <script type="module" src="/dist/<?= $script ?>"></script>
</body>
</html>
