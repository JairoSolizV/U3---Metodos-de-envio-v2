<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="GET">
        <label for="">Universidad:</label><br>
        <input type="text" name="universidad"><br>

        <label for="">Carrera:</label><br>
        <input type="text" name="carrera"><br>

        <label for="">Semestre:</label><br>
        <input type="text" name="semestre"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        $universidad = trim($_GET["universidad"]);
        $carrera = trim($_GET["carrera"]);
        $semestre = trim($_GET["semestre"]);

        if (empty($universidad) || empty($carrera) || empty($semestre)) {
            echo "<p style='color: red;'>Coloque los datos por favor</p>";
        } else {
            echo "Universidad: " . htmlspecialchars($universidad) . "<br>";
            echo "Carrera: " . htmlspecialchars($carrera) . "<br>";
            echo "Semestre: " . htmlspecialchars($semestre) . "<br>";
        }
    }
    ?>
</body>
</html>