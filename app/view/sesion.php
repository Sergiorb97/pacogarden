<link rel="stylesheet" href="../../Assets/css/Cabecera.css">
<div class="cabeceradiv">
    <span id = "pacogarden"class="spantxt">Paco Gardens</span>
    <span class="spantxt">Usuario: <?= $_SESSION['usuario'] ?></span>
    <span class="spantxt">Tipo: <?= $_SESSION['tipo'] ?></span>
    <span class="spantxt">Hora entrada: <?= $_SESSION['hora'] ?></span>
    <span class="spantxt"><a href="../controller/ctrlModificarUsuario.php?id=<?= $_SESSION['id'] ?>"><img src="../../Assets/img/modificar.png" class="modificarUsuario" title="Modificar tú usuario"></a></span>
    <span class="spantxt"><a href="../controller/ctrlLogin.php?sesion=cerrar"><img src="../../Assets/img/cerrarSesion.png" class="cerrarSesion" title="Cerrar sesión"></a></span>
</div>