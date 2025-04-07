<!-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>Especialidad</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($profesores as $profesor): ?>
    <tr>
        <td><?= $profesor['ID_Profesor'] ?></td>
        <td><?= $profesor['Nombre'] ?></td>
        <td><?= $profesor['Apellido'] ?></td>
        <td><?= $profesor['Fecha_Nacimiento'] ?></td>
        <td><?= $profesor['Direccion'] ?></td>
        <td><?= $profesor['Telefono'] ?></td>
        <td><?= $profesor['Correo_Electronico'] ?></td>
        <td><?= $profesor['Especialidad'] ?></td>
        <td>
            <a href="index.php?action=update&id=<?= $profesor['ID_Profesor'] ?>">Editar</a>
            <a href="index.php?action=delete&id=<?= $profesor['ID_Profesor'] ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?action=create">Registrar Profesor</a> -->

    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Estudiantes</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <!-- CSS Personalizado -->
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
            <div class="container-fluid">
        <div class="row">
            <!-- Barra de Navegación -->
            <div class="col-md-3 sidebar">
                <h3 class="mb-4">Menú Principal</h3>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Inicio</a>
                    <a class="nav-link" href="Asistencia.html"><i class="fas fa-chalkboard-teacher"></i> Asistencia</a>
                    <a class="nav-link" href="Actividades.html"><i class="fas fa-calendar-alt"></i> Actividades</a>
                    <a class="nav-link" href="Estudiantes.html"><i class="fas fa-users"></i> Estudiantes</a>
                    <a class="nav-link" href="Login.html"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </nav>
            </div>

            <!-- Contenido Principal -->
            <div class="col-md-9 content">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1 class="text-center"><i class="fas fa-graduation-cap"></i> Gestión de Estudiantes</h1>
                    </div>
                    
                    <!-- Barra de búsqueda y botón de agregar -->
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar estudiante...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <!-- Botón para abrir el modal -->
                                
                                <a href="index.php?action=create">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal">
                                        <i class="fas fa-plus-circle"></i> Agregar Acudiente
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabla de estudiantes -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Dirección</th>
                                                <th>Teléfono</th>
                                                <th>Correo Electrónico</th>
                                                <th>Especialidad</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php foreach ($profesores as $profesor): ?>
                                                <tr>
                                                    <td><?= $profesor['ID_Profesor'] ?></td>
                                                    <td><?= $profesor['Nombre'] ?></td>
                                                    <td><?= $profesor['Apellido'] ?></td>
                                                    <td><?= $profesor['Fecha_Nacimiento'] ?></td>
                                                    <td><?= $profesor['Direccion'] ?></td>
                                                    <td><?= $profesor['Telefono'] ?></td>
                                                    <td><?= $profesor['Correo_Electronico'] ?></td>
                                                    <td><?= $profesor['Especialidad'] ?></td>
                                                    <td>
                                                        <a href="index.php?action=update&id=<?= $profesor['ID_Profesor'] ?>">Editar</a>
                                                        <a href="index.php?action=delete&id=<?= $profesor['ID_Profesor'] ?>">Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <!-- Agrega más filas con datos de estudiantes -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para agregar -->
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>