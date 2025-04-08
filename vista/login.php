    <div class="logo">
        <img src="img/logo-jardin.png" alt="logo-jardin">
    </div>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="index.php" method="POST">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" name="username" id="nombre_usuario" required>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" id="contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="registro.html">Regístrate</a></p>
        <p>¿Olvidaste tu usuario? <a href="crud/update.php">Restablecer</a></p>
    </div>