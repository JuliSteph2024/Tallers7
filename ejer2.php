<?php
// Inicializa las variables
$fechaNacimiento = "";
$usuario = "";
$contraseña = "";
$genero = "";

// Procesa el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $genero = $_POST['genero'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo2.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Registro</h1>
        <form id="registroForm" method="POST">
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required value="<?php echo htmlspecialchars($fechaNacimiento); ?>">
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="No utilices tu nombre real" required value="<?php echo htmlspecialchars($usuario); ?>">
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Por lo menos 8 caracteres" required value="<?php echo htmlspecialchars($contraseña); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Género</label>
                <div>
                    <button type="button" class="gender-button" onclick="setGenero('Mujer', this)">
                        <img src="img/mujer (1).png" alt="Mujer" style="width: 50px; height: auto;">
                    </button>
                    <button type="button" class="gender-button" onclick="setGenero('Hombre', this)">
                        <img src="img/hombre.png" alt="Hombre" style="width: 50px; height: auto;">
                    </button>
                </div>
                <input type="hidden" id="genero" name="genero" value="<?php echo htmlspecialchars($genero); ?>">
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDatos" onclick="setModalData()">
                Mostrar Datos
            </button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDatos" tabindex="-1" aria-labelledby="modalDatosLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDatosLabel">Datos del Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Fecha de Nacimiento:</strong> <span id="modalFechaNacimiento"><?php echo htmlspecialchars($fechaNacimiento); ?></span></p>
                    <p><strong>Usuario:</strong> <span id="modalUsuario"><?php echo htmlspecialchars($usuario); ?></span></p>
                    <p><strong>Contraseña:</strong> <span id="modalContraseña"><?php echo htmlspecialchars($contraseña); ?></span></p>
                    <p><strong>Género:</strong> <span id="modalGenero"><?php echo htmlspecialchars($genero); ?></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function setGenero(genero, button) {
            document.getElementById('genero').value = genero;
            const buttons = document.querySelectorAll('.gender-button');
            buttons.forEach(btn => {
                btn.classList.remove('selected');
            });
            button.classList.add('selected');
        }

        function setModalData() {
            const fechaNacimiento = document.getElementById('fechaNacimiento').value;
            const usuario = document.getElementById('usuario').value;
            const contraseña = document.getElementById('contraseña').value;
            const genero = document.getElementById('genero').value;

            document.getElementById('modalFechaNacimiento').textContent = fechaNacimiento;
            document.getElementById('modalUsuario').textContent = usuario;
            document.getElementById('modalContraseña').textContent = contraseña;
            document.getElementById('modalGenero').textContent = genero;
        }
    </script>
</body>

</html>