<!-- Barra de búsqueda y botón de agregar -->
<section class="read">
        <h1 style="text-align: center;">🎓 Gestión de Estudiantes</h1>
        <form method="GET" action="index.php" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
        <input type="hidden" name="gestion" value="estudiante" />
        <input type="text" name="buscar" placeholder="Buscar estudiante..." value="<?= isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : '' ?>" />
            <button type="submit">🔍 Buscar</button>
            <a href="index.php?gestion=estudiante&action=create">
                <button type="button">➕ Agregar Estudiante</button>
            </a>
        </form>
        <table class="tabla">
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>NIvel Academico</th>
        <th>Acciones</th>
    </tr>
    
    <?php 
    // Si hay una búsqueda, filtrar el array
    if (isset($_GET['buscar']) && !empty($_GET['buscar'])) {
        $termino = strtolower(trim($_GET['buscar']));
    
        // Filtra el array $estudiantes por coincidencias en el nombre
        $estudiantes = array_filter($estudiantes, function($estudiante) use ($termino) {
            return strpos(strtolower($estudiante['Nombre']), $termino) !== false;
        });
    }

    foreach ($estudiantes as $estudiante): ?>
        <tr>
            <td><?= $estudiante['ID_Estudiante'] ?></td>
            <td><?= $estudiante['Nombre'] ?></td>
            <td><?= $estudiante['Apellido'] ?></td>
            <td><?= $estudiante['Fecha_Nacimiento'] ?></td>
            <td><?= $estudiante['Direccion'] ?></td>
            <td><?= $estudiante['Telefono'] ?></td>
            <td><?= $estudiante['Correo_Electronico'] ?></td>
            <td><?= $estudiante['Nivel_Academico'] ?></td>
            <td>
                <a href="index.php?action=update&id=<?= $estudiante['ID_Estudiante'] ?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $estudiante['ID_Estudiante'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>
    