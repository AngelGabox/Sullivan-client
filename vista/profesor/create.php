<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Profesor</title>
</head>
<body>
    <h2>Registrar Profesor</h2>
    <form action="index.php?action=create" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required ><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required><br>

        <label for="especialidad">Especialidad:</label>
        <input type="text" name="especialidad" required><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html> -->
<div class="modal fade" id="agregarEstudianteModal" tabindex="-1" aria-labelledby="agregarEstudianteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarEstudianteModalLabel"><i class="fas fa-plus-circle"></i> Agregar Profesor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario dentro del modal -->
                    <form action="index.php?action=create" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa el nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label"><i class="fas fa-user"></i> Apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingresa el apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label"><i class="fas fa-birthday-cake"></i> Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" id="fechaNacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                            <input type="text"  name="direccion" class="form-control" id="direccion" placeholder="Ingresa la dirección" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label"><i class="fas fa-phone"></i> Teléfono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingresa el teléfono" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                            <input type="email" name="correo" class="form-control" id="correo" placeholder="Ingresa el correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="especialidad" class="form-label"><i class="fas fa-envelope"></i>Especialidad</label>
                            <input type="text" name="especialidad" class="form-control" id="especialidad" placeholder="Ingresa el especialidad" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>