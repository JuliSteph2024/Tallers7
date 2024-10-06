<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo1.css">
</head>
<body>
    <div class="contenido">
    <?php
        $nombre = $_REQUEST['nombre'];
        echo '<h1 class="saludo">Hola ' . htmlspecialchars($nombre) . ', es un gusto tenerte de vuelta.</h1>';
    ?>

    </div>
<script>
        window.addEventListener('load', function() {
            const saludo = document.querySelector('.saludo');
            saludo.style.opacity = 1;
        });
    </script>
</body>
</html>