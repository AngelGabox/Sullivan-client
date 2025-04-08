<?php
include_once 'modelo/profesor_modelo.php'; // Importa el modelo

// Función para obtener y mostrar todos los profesores
function index() {
    $profesores = getAllProfesores(); // Obtiene todos los profesores desde el modelo
    include 'vista/profesor/read.php'; // Carga la vista para mostrar los profesores
}

// Función para crear un profesor nuevo
function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        createProfesor(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha_nacimiento'],
            $_POST['direccion'],
            $_POST['telefono'],
            $_POST['correo'],
            $_POST['especialidad']
        ); // Llama al modelo para crear profesor
        header("Location: index.php"); // Redirige a la página principal después de la inserción
    }
    include 'vista/profesor/create.php'; // Carga la vista del formulario de creación
}

// Función para actualizar un profesor
function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updateProfesor(
            $_POST['id'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha_nacimiento'],
            $_POST['direccion'],
            $_POST['telefono'],
            $_POST['correo'],
            $_POST['especialidad']
        );
        header("Location: index.php"); 
    }
    include 'vista/profesor/update.php'; // Carga la vista del formulario de actualización
}

// Función para eliminar un profesor
function delete() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        deleteProfesor($_POST['id_profesor']); // Llama al modelo para eliminar profesor
        header("Location: index.php"); 
    }
    include 'vista/profesor/delete.php'; // Carga la vista de confirmación de eliminación
}
?>
