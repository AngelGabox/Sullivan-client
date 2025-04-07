<!-- Barra de búsqueda y botón de agregar -->
<section class="read">
        <h1 style="text-align: center;">🎓 Gestión de Profesor</h1>
        <form method="GET" action="index.php" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
        <input type="text" name="buscar" placeholder="Buscar profesor..." value="<?= isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : '' ?>" />
        <button type="submit">🔍 Buscar</button>
            <a href="index.php?">
                <button type="button">➕ Agregar Profe</button>
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
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
<?php 
    if (isset($_GET['buscar']) && !empty($_GET['buscar'])) {
        $termino = strtolower(trim($_GET['buscar']));
    
        // Filtra el array $profesores por coincidencias en el nombre
        $profesores = array_filter($profesores, function($profesor) use ($termino) {
            return strpos(strtolower($profesor['Nombre']), $termino) !== false;
        });
    }
    foreach ($profesores as $profesor): ?>
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
</section>
    