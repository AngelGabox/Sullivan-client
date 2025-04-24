<?php
    function connect() {
        $conn = mysqli_connect('centerbeam.proxy.rlwy.net', 'root', 'EMjMNZcYWiQMuPulOEtbwXRhZGCIgHXt', 'railway', 13464);    
        
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
    
        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    return $conn;
}