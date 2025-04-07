<form method="POST" action="index.php?action=delete">
    <input type="hidden" name="id_estudiante" value="<?= $_GET['id'] ?>">
    <p>¿Está seguro que desea eliminar este profesor?</p>
    <button type="submit">Eliminar</button>
</form>
