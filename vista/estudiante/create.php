<div id="modal" class="container-form">
      <h2><i class="fas fa-plus-circle"></i> Agregar Estudiante</h2>
      <span class="cerrar" id="cerrarModal">&times;</span>
      <form action="index.php?gestion=estudiante&action=create" method="POST">
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

        <label><i class="fas fa-briefcase"></i> Nivel Academico</label>
        <input type="text" name="nivel_academico" required>

        <div>
          <button type="submit">Guardar</button>
        </div>
  </form>
</div>