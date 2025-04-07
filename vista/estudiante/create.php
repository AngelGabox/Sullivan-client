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
<div id="modal" class="modal">
  <div class="modal-contenido">
    <div class="modal-encabezado">
      <h2><i class="fas fa-plus-circle"></i> Agregar Profesor</h2>
      <span class="cerrar" id="cerrarModal">&times;</span>
    </div>

    <div class="modal-cuerpo">
      <form action="index.php?action=create" method="POST">
        <label><i class="fas fa-user"></i> Nombre</label>
        <input type="text" name="nombre" required>

        <label><i class="fas fa-user"></i> Apellido</label>
        <input type="text" name="apellido" required>

        <label><i class="fas fa-birthday-cake"></i> Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" required>

        <label><i class="fas fa-map-marker-alt"></i> Dirección</label>
        <input type="text" name="direccion" required>

        <label><i class="fas fa-phone"></i> Teléfono</label>
        <input type="text" name="telefono" required>

        <label><i class="fas fa-envelope"></i> Correo Electrónico</label>
        <input type="email" name="correo" required>

        <label><i class="fas fa-briefcase"></i> Especialidad</label>
        <input type="text" name="especialidad" required>

        <div>
          <button type="button" id="cerrarModalBtn">Cerrar</button>
          <button type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>