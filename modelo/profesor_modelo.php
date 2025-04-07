<?php


function getAllProfesores() {
    $conn = connect();
    $sql = "SELECT p.ID_Profesor, per.Nombre, per.Apellido, per.Fecha_Nacimiento, per.Direccion, per.Telefono, per.Correo_Electronico, p.Especialidad 
            FROM profesor p
            INNER JOIN persona per ON p.ID_Persona = per.ID_Persona";
    $result = mysqli_query($conn, $sql);
    $profesores = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $profesores;
}

function createProfesor($nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $correo, $especialidad) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        // Insertar en la tabla persona
        $sql_persona = "INSERT INTO persona (Nombre, Apellido, Fecha_Nacimiento, Direccion, Telefono, Correo_Electronico) 
                        VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$direccion', '$telefono', '$correo')";
        mysqli_query($conn, $sql_persona);
        $id_persona = mysqli_insert_id($conn);

        // Insertar en la tabla profesor
        $sql_profesor = "INSERT INTO profesor (ID_Persona, Especialidad) VALUES ('$id_persona', '$especialidad')";
        mysqli_query($conn, $sql_profesor);
        
        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al crear el profesor: " . $e->getMessage());
    }
}

function updateProfesor($id_profesor, $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $correo, $especialidad) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        // Actualizar datos en la tabla persona
        $sql_persona = "UPDATE persona 
                        INNER JOIN profesor ON persona.ID_Persona = profesor.ID_Persona
                        SET Nombre='$nombre', Apellido='$apellido', Fecha_Nacimiento='$fecha_nacimiento', Direccion='$direccion',
                            Telefono='$telefono', Correo_Electronico='$correo'
                        WHERE profesor.ID_Profesor='$id_profesor'";
        mysqli_query($conn, $sql_persona);

        // Actualizar especialidad en la tabla profesor
        $sql_profesor = "UPDATE profesor SET Especialidad='$especialidad' WHERE ID_Profesor='$id_profesor'";
        mysqli_query($conn, $sql_profesor);
        
        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al actualizar el profesor: " . $e->getMessage());
    }
}

function deleteProfesor($id_profesor) {
    $conn = connect();
    mysqli_begin_transaction($conn);
    try {
        // Obtener el ID de la persona antes de eliminar el profesor
        $sql_get_persona = "SELECT ID_Persona FROM profesor WHERE ID_Profesor='$id_profesor'";
        $result = mysqli_query($conn, $sql_get_persona);
        $row = mysqli_fetch_assoc($result);
        $id_persona = $row['ID_Persona'];

        // Eliminar de la tabla profesor
        $sql_profesor = "DELETE FROM profesor WHERE ID_Profesor='$id_profesor'";
        mysqli_query($conn, $sql_profesor);

        // Eliminar de la tabla persona
        $sql_persona = "DELETE FROM persona WHERE ID_Persona='$id_persona'";
        mysqli_query($conn, $sql_persona);

        mysqli_commit($conn);
        mysqli_close($conn);
    } catch (Exception $e) {
        mysqli_rollback($conn);
        mysqli_close($conn);
        die("Error al eliminar el profesor: " . $e->getMessage());
    }
}
function getProfesorById($id_profesor) {
    $conn = connect();
    $sql = "SELECT p.ID_Profesor, per.Nombre, per.Apellido, per.Fecha_Nacimiento, per.Direccion, per.Telefono, per.Correo_Electronico, p.Especialidad 
            FROM profesor p
            INNER JOIN persona per ON p.ID_Persona = per.ID_Persona
            WHERE p.ID_Profesor = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id_profesor);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $profesor = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $profesor;
}

?>
