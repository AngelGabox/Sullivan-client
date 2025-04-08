<?php 

function loguear() {

    $valid_username = "Juan Pulido";
    $valid_password = "123456";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Corrección aquí
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['username'] = $username;
            echo "¡¡¡Usuario y contraseña correctos!!!";
            header("Location: index.php");
        } else { 
            echo "¡¡¡Usuario y contraseña incorrectos!!!";
        }
    }
}

?>