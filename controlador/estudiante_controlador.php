<?php
include_once 'modelo/estudiante_modelo.php'; // Importa el modelo

function index() {
    $estudiantes = getAllEstudiantes(); 
    include 'vista/estudiante/read.php'; 
}

function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        createEstudiante(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha_nacimiento'],
            $_POST['direccion'],
            $_POST['telefono'],
            $_POST['correo'],
            $_POST['nivel_academico']
        );
        header("Location: index.php"); // Redirige a la página principal después de la inserción
    }
    include 'vista/estudiante/create.php'; // Carga la vista del formulario de creación
}

function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updateEstudiante(
            $_POST['id_estudiante'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha_nacimiento'],
            $_POST['direccion'],
            $_POST['telefono'],
            $_POST['correo'],
            $_POST['nivel_academico']
        );
        header("Location: index.php"); 
    }
    include 'vista/estudiante/update.php'; // Carga la vista del formulario de actualización
}

function delete() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        deleteEstudiante($_POST['id_estudiante']);
        header("Location: index.php"); 
    }
    include 'vista/estudiante/delete.php';
}
?>