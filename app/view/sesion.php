<div>
    <span>Usuario: <?= $_SESSION['usuario'] ?></span>
    <span>Tipo: <?= $_SESSION['tipo'] ?></span>
    <span>Hora entrada: <?= $_SESSION['hora'] ?></span>
    <a href="../controller/ctrlModificarUsuario.php?id=<?= $_SESSION['id'] ?>">Modificar mi usuario</a>
    <span><a href="../controller/ctrlLogin.php?sesion=cerrar">Cerrar sesión</a></span>
</div>