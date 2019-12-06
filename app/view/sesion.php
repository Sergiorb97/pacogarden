<div>
    <span>Usuario: <?= $_SESSION['usuario'] ?></span>
    <span>Tipo: <?= $_SESSION['tipo'] ?></span>
    <span>Hora entrada: <?= $_SESSION['hora'] ?></span>
    <span><a href="../controller/ctrlLogin.php?sesion=cerrar">Cerrar sesión</a></span>
</div>