<?php
include_once 'modelo/profesor_modelo.php';

if (!isset($_GET['id'])) {
    die("Error: ID de profesor no proporcionado.");
}

$id_profesor = $_GET['id'];
$profesor = getProfesorById($id_profesor); // Función que obtendremos en el modelo

if (!$profesor) {
    die("Error: Profesor no encontrado.");
}
?>
<form method="POST" action="index.php?action=update">
    <input type="hidden" name="id_profesor" value="<?= $profesor['ID_Profesor'] ?>">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $profesor['Nombre'] ?>" required>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="<?= $profesor['Apellido'] ?>" required>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?= $profesor['Fecha_Nacimiento'] ?>" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" value="<?= $profesor['Direccion'] ?>" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="<?= $profesor['Telefono'] ?>" required>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" name="correo" value="<?= $profesor['Correo_Electronico'] ?>" required>

    <label for="especialidad">Especialidad:</label>
    <input type="text" name="especialidad" value="<?= $profesor['Especialidad'] ?>" required>

    <button type="submit">Actualizar</button>
</form>
