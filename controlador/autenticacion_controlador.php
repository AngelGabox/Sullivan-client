<?php  
include_once "modelo/autenticacion_modelo.php";

function login() {
    loguear();
    include "vista/login.php";
}

function cerrar() {
    session_unset();
    header("Location: index.php");
}
?>