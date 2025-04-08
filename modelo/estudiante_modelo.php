<?php


function getAllEstudiantes() {
    $conn = connect();
    $sql = "SELECT ID_Estudiante, Nombre, Apellido, Fecha_Nacimiento, Direccion, Telefono, Correo_Electronico, Nivel_Academico 
            FROM estudiante"; 
    $result = mysqli_query($conn, $sql);
    $estudiantes = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $estudiantes;
}

function createEstudiante($nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $correo, $nivel_academico) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        $sql_persona = "INSERT INTO estudiante (Nombre, Apellido, Fecha_Nacimiento, Direccion, Telefono, Correo_Electronico, Nivel_Academico) 
                        VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$direccion', '$telefono', '$correo', '$nivel_academico')";
        mysqli_query($conn, $sql_persona);        
        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al crear el estudiante: " . $e->getMessage());
    }
}

function updateEstudiante($id_estudiante, $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $correo, $nivel_academico) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        // Actualizar datos en la tabla estudiante
        $sql_persona = "UPDATE estudiante SET Nombre='$nombre', Apellido='$apellido', Fecha_Nacimiento='$fecha_nacimiento', Direccion='$direccion',
                            Telefono='$telefono', Correo_Electronico='$correo', Nivel_Academico='$nivel_academico'
                        WHERE ID_Estudiante='$id_estudiante'";
        mysqli_query($conn, $sql_persona);

        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al actualizar el estudiante: " . $e->getMessage());
    }
}

function deleteEstudiante($id_estudiante) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        // Obtener el ID de la persona antes de eliminar el profesor
        $sql_get_estudiante = "SELECT ID_Estudiante FROM estudiante WHERE ID_Estudiante='$id_estudiante'";
        $result = mysqli_query($conn, $sql_get_estudiante);
        $row = mysqli_fetch_assoc($result);
        $id_estudiante = $row['ID_Estudiante'];

        // Eliminar de la tabla estudiante
        $sql_profesor = "DELETE FROM estudiante WHERE ID_Estudiante='$id_estudiante'";
        mysqli_query($conn, $sql_profesor);

        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al eliminar el estudiante: " . $e->getMessage());
    }
}
function getEstudianteById($id_estudiante) {
    $conn = connect();
    $sql = "SELECT * FROM estudiante
            WHERE ID_Estudiante = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id_estudiante);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $estudiante = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $estudiante;
}

?>
