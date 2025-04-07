<?php
include_once 'modelo/estudiante_modelo.php';

if (!isset($_GET['id'])) {
    die("Error: ID de estudiante no proporcionado.");
}

$id_estudiante = $_GET['id'];
$estudiante = getEstudianteById($id_estudiante); // Función que obtendremos en el modelo

if (!$estudiante) {
    die("Error: Estudiante no encontrado.");
}
?>
<form method="POST" action="index.php?action=update">
    <input type="hidden" name="id_estudiante" value="<?= $profesor['ID_Estudiante'] ?>">
    
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

    <label for="nivel_academico">Nivel Academico:</label>
    <input type="text" name="nivel_academico" value="<?= $profesor['Nivel_Academico'] ?>" required>

    <button type="submit">Actualizar</button>
</form>
