<?php
    function connect() {
        $conn = mysqli_connect('localhost', 'root', '', 'sullivan');    
        
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
    
        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    return $conn;
}