<html>
<body>
<form method="post" action="registro.php">
    <p>Nombre de usuario
        <input type="text" id="nombre" name="nombre" required>
    </p>
    <p>Contraseña
        <input type="text" id="contraseña" name="contraseña" required>
    </p>
    <p>Info
        <input type="text" id="info" name="info">
    </p>
    <input type="submit" value="Registrar">

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $info = $_POST['info'];
        $conexion=new PDO("mysql:host=localhost;dbname=test", "root", "curso");
        $sql=$conexion->query("INSERT INTO usuarios (nombre, contraseña, info) VALUES ('$nombre', '$contraseña', '$info')");
        header("Location:login.php");
    }
    ?>
</body>
</html>>
