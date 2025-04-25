<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplo envio de info php</h2>
    <form action="index.php" method="POST">
        <label for="">Nombre Completo:</label><br>
        <input type="text" name="nombre"><br>

        <label for="">Direccion:</label><br>
        <input type="text" name="direccion"><br>

        <label for="">Telefono:</label><br>
        <input type="text" name="telefono"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $dir = trim($_POST["direccion"]);
        $tel = trim($_POST["telefono"]);

        if (empty($nombre) || empty($dir) || empty($tel)) {
            echo "<p style='color: red;'>Coloque los datos por favor</p>";
        } else {
            echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
            echo "Direccion: " . htmlspecialchars($dir) . "<br>";
            echo "Telefono: " . htmlspecialchars($tel) . "<br>";
        }
    }
    ?>
</body>
</html>