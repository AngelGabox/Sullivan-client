<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiantes</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- CSS Personalizado -->
        <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <main class="container">
        <div class="sidebar">
            <h3>Menú Principal</h3>
            <ul class="menu-list">
                <li><a href="index.html"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="Asistencia.html"><i class="fas fa-chalkboard-teacher"></i> Asistencia</a></li>
                <li><a href="Actividades.html"><i class="fas fa-calendar-alt"></i> Actividades</a></li>
                <li><a href="index.php?gestion=estudiante"><i class="fas fa-users"></i> Estudiantes</a></li>
                <li><a href="index.php?gestion=profesor"><i class="fas fa-users"></i> Profes</a></li>
                <li><a href="Login.html"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            require_once('modelo/conexion.php');

            $controlador = isset($_GET['gestion']) ? $_GET['gestion'] : 'profesor';
            include_once "controlador/{$controlador}_controlador.php";
            
            $action = isset($_GET['action']) ? $_GET['action'] : 'index';
            
            if ($action == 'create') {
                create();
            } elseif ($action == 'update') {
                update();
            } elseif ($action == 'delete') {
                delete();
            }else{
                index();
            }
            ?>
        </div>
    </main>
</body>
</html>